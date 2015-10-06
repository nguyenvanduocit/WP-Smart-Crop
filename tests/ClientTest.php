<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:50 PM
 */

namespace FaceCrop\Tests;

use FaceCrop\Client;

class ClientTest extends \PHPUnit_Framework_TestCase {
	/**
	 * @var \FaceCrop\Client
	 */
	public $client;
	public function setUp(){
		$this->client = new Client('5e3a3ac24363af113e04a58c61637ea4','sXA4iYYphLzg1z8IAcFAtPf8UdcXKwHm', 'http://apicn.faceplusplus.com');
	}
	public function testDetect(){
		$this->client->detect('http://m.f9.img.vnexpress.net/2014/04/09/ngoc-trinh-1-4461-1397010558.jpg');
	}
}
