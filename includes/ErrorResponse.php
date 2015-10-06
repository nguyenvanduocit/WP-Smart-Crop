<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:01 PM
 */

namespace FaceCrop;


class ErrorResponse {
	public $code;
	public $message;

	/**
	 * ErrorResponse constructor.
	 *
	 * @param $code
	 * @param $statusCode
	 * @param $message
	 */
	public function __construct( $code, $message ) {
		$this->code       = $code;
		$this->message    = $message;
	}

	/**
	 * return human readable message
	 * @return string
	 */
	public function getReadableMessage(){
		switch($this->code){
			case 'IMAGE_ERROR_FAILED_TO_DOWNLOAD':
				return 'Can not download this image';
			default:
				return $this->code;
		}
	}
}