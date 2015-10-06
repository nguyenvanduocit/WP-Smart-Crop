<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:17 PM
 */

namespace FaceCrop\Type;


use FaceCrop\Type\Base;

class FacePosition extends Base{
	/**
	 * @return Point
	 */
	public function getCenter() {
		return $this->center;
	}

	/**
	 * @param Point $center
	 */
	public function setCenter( $center ) {
		$this->center = $center;
	}

	/**
	 * @return Point
	 */
	public function getEyeLeft() {
		return $this->eye_left;
	}

	/**
	 * @param Point $eye_left
	 */
	public function setEyeLeft( $eye_left ) {
		$this->eye_left = $eye_left;
	}

	/**
	 * @return Point
	 */
	public function getEyeRight() {
		return $this->eye_right;
	}

	/**
	 * @param Point $eye_right
	 */
	public function setEyeRight( $eye_right ) {
		$this->eye_right = $eye_right;
	}

	/**
	 * @return int
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * @param int $height
	 */
	public function setHeight( $height ) {
		$this->height = $height;
	}

	/**
	 * @return int
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * @param int $width
	 */
	public function setWidth( $width ) {
		$this->width = $width;
	}

	/**
	 * @return Point
	 */
	public function getMouthLeft() {
		return $this->mouth_left;
	}

	/**
	 * @param Point $mouth_left
	 */
	public function setMouthLeft( $mouth_left ) {
		$this->mouth_left = $mouth_left;
	}

	/**
	 * @return Point
	 */
	public function getMouthRight() {
		return $this->mouth_right;
	}

	/**
	 * @param Point $mouth_right
	 */
	public function setMouthRight( $mouth_right ) {
		$this->mouth_right = $mouth_right;
	}

	/**
	 * @return Point
	 */
	public function getNose() {
		return $this->nose;
	}

	/**
	 * @param Point $nose
	 */
	public function setNose( $nose ) {
		$this->nose = $nose;
	}
	/**
	 * @var Point
	 */
	protected $center;
	/**
	 * @var Point
	 */
	protected $eye_left;
	/**
	 * @var Point
	 */
	protected $eye_right;
	/**
	 * @var int
	 */
	protected $height;
	/**
	 * @var int
	 */
	protected $width;
	/**
	 * @var Point
	 */
	protected $mouth_left;
	/**
	 * @var Point
	 */
	protected $mouth_right;
	/**
	 * @var Point
	 */
	protected $nose;
}