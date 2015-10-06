<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:20 PM
 */

namespace FaceCrop\Type;


class Confidence extends  Single{
	/**
	 * @return float
	 */
	public function getConfidence() {
		return $this->confidence;
	}

	/**
	 * @param float $confidence
	 */
	public function setConfidence( $confidence ) {
		$this->confidence = $confidence;
	}
	/**
	 * @var float
	 */
	public $confidence;
}