<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:08 PM
 */

namespace FaceCrop\Type;


class Face extends Base{
	/**
	 * @var FaceAttribute
	 */
	protected $attribute;
	/** @var  string */
	protected $face_id;
	/**
	 * @var FacePosition
	 */
	protected $position;
	/**
	 * @return FaceAttribute
	 */
	public function getAttribute() {
		return $this->attribute;
	}

	/**
	 * @param FaceAttribute $attribute
	 */
	public function setAttribute( $attribute ) {
		$this->attribute = $attribute;
	}

	/**
	 * @return mixed
	 */
	public function getFaceId() {
		return $this->face_id;
	}

	/**
	 * @param mixed $face_id
	 */
	public function setFaceId( $face_id ) {
		$this->face_id = $face_id;
	}

	/**
	 * @return FacePosition
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * @param FacePosition $position
	 */
	public function setPosition( $position ) {
		$this->position = $position;
	}
}