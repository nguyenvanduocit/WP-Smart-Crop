<?php
/*
Plugin Name: WP Facecrop
Plugin URI:  http://laptrinh.senviet.org
Description: Face crop for WordPress
Version:     0.0.1
author:      nguyenvanduocit
Author URI:  http://nvduoc.senviet.org
Text Domain: wp_face_crop
Domain Path: /languages
*/

use FaceCrop\Client;

require_once __DIR__ . '/vendor/autoload.php';


add_filter( 'wp_generate_attachment_metadata', 'cropImageWithFaceDectection', 10, 2 );
function cropImageWithFaceDectection($metadata, $attachment_id){
	if(!isset($metadata['sizes'])) {
		return $metadata;
	}
	$upload_path = wp_upload_dir();
	$path = $upload_path['basedir'];
	//handle the different media upload directory structures
	if(isset($path)){
		$file = trailingslashit($upload_path['basedir'].'/').$metadata['file'];
	}else{
		$file = trailingslashit($upload_path['path']).$metadata['file'];
	}

	$client = new Client('5e3a3ac24363af113e04a58c61637ea4','sXA4iYYphLzg1z8IAcFAtPf8UdcXKwHm', 'http://apicn.faceplusplus.com');
	/** @var \FaceCrop\Type\Face[] $result */
	$result = $client->detect('http://showbizviet.vn/upload/files/data/2013/8/2/18/466473/1825600192_cham-soc-da-chuan-nhu-ngoc-trinh%202.jpg');

	$height = $result[0]->getPosition()->getHeight();
	$width = $result[0]->getPosition()->getWidth();
	$leftEye = $result[0]->getPosition()->getEyeLeft();
	$mouthRight = $result[0]->getPosition()->getMouthRight();

	$editor = wp_get_image_editor( $file );
	$startX = $leftEye->x/$width*100;
	$startY = $leftEye->y/$height*100;
	$editor->crop( $startX-100, $startY-100, 500, 300, 500, 300, false );
	$result = $editor->save( $file );
	wp_send_json(array($result, $file));
	return $metadata;
}