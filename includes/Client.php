<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 1:36 PM
 */

namespace FaceCrop;
use FaceCrop\Type\Face;

/**
 * Class Client
 *
 * Use for making request and get data from servers
 *
 * @package FaceCrop
 */
class Client {
	/**
	 * @var string
	 */
	protected $apiKey;
	/**
	 * @var string
	 */
	protected $apiSecret;
	/**
	 * @var string
	 */
	protected $apiUrl;

	/**
	 * Client constructor.
	 *
	 * @param $apiKey
	 * @param $apiSecret
	 * @param $apiUrl
	 */
	public function __construct($apiKey, $apiSecret, $apiUrl) {
		$this->apiKey = $apiKey;
		$this->apiSecret = $apiSecret;
		$this->apiUrl = $apiUrl;
	}
	public function detect($imgSrc){
		$data = array();
		if(is_string($imgSrc))
		{
			$data['url'] = $imgSrc;
		}
		else
		{
			$data['img'] = $imgSrc;
		}
		$result = $this->makeRequest('POST','/detection/detect',  $data);
		return $result;
	}
	public function makeRequest($method, $apiPath, $data = array()){
		$data['api_key'] = $this->apiKey;
		$data['api_secret'] = $this->apiSecret;
		$data['attribute'] = 'glass,gender,age,race,smiling,glass,pose';
		$requestArgs = array(
			'method'=>strtoupper($method),
			'body'=>$data,
			'timeout'=>20
		);
		$response = wp_remote_request($this->apiUrl.'/'.$apiPath, $requestArgs);
		return $this->parseResponse($response);
	}

	public function parseResponse($response){
		$responseCode = wp_remote_retrieve_response_code($response);
		$faceJson = json_decode(wp_remote_retrieve_body($response));
		switch($responseCode){
			case '200':
				$faces = array();
				if(!is_null($faceJson->face)){
					foreach($faceJson->face as   $face){
						$faces[] = new Face($face);
					}
				}
				return $faces;
			default :
				return new ErrorResponse($faceJson->error_code, $faceJson->error);
		}
	}
	/**
	 * @return string
	 */
	public function getApiKey() {
		return $this->apiKey;
	}

	/**
	 * @param string $apiKey
	 */
	public function setApiKey( $apiKey ) {
		$this->apiKey = $apiKey;
	}

	/**
	 * @return string
	 */
	public function getApiSecret() {
		return $this->apiSecret;
	}

	/**
	 * @param string $apiSecret
	 */
	public function setApiSecret( $apiSecret ) {
		$this->apiSecret = $apiSecret;
	}

	/**
	 * @return string
	 */
	public function getApiUrl() {
		return $this->apiUrl;
	}

	/**
	 * @param string $apiUrl
	 */
	public function setApiUrl( $apiUrl ) {
		$this->apiUrl = $apiUrl;
	}
}