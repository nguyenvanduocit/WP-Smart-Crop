<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:09 PM
 */

namespace FaceCrop\Type;


class FaceAttribute extends Base{
	/**
	 * @var Age
	 */
	public $age;
	/**
	 * @var Confidence
	 */
	protected $gender;
	/**
	 * @var Confidence
	 */
	protected $glass;
	/**
	 * @var Confidence
	 */
	protected $pose;
	/**
	 * @var Confidence
	 */
	protected $race;
	/**
	 * @var Confidence
	 */
	protected $smiling;
	/**
	 * @return \FaceCrop\Type\Age
	 */
	public function getAge() {
		return $this->age;
	}

	/**
	 * @param \FaceCrop\Type\Age $age
	 */
	public function setAge( $age ) {
		$this->age = $age;
	}

	/**
	 * @return \stdClass
	 */
	public function getGender() {
		return $this->gender;
	}

	/**
	 * @param \stdClass $gender
	 */
	public function setGender( $gender ) {
		$this->gender = $gender;
	}

	/**
	 * @return \stdClass
	 */
	public function getGlass() {
		return $this->glass;
	}

	/**
	 * @param \stdClass $glass
	 */
	public function setGlass( $glass ) {
		$this->glass = $glass;
	}

	/**
	 * @return \stdClass
	 */
	public function getPose() {
		return $this->pose;
	}

	/**
	 * @param \stdClass $pose
	 */
	public function setPose( $pose ) {
		$this->pose = $pose;
	}

	/**
	 * @return \stdClass
	 */
	public function getRace() {
		return $this->race;
	}

	/**
	 * @param \stdClass $race
	 */
	public function setRace( $race ) {
		$this->race = $race;
	}

	/**
	 * @return \stdClass
	 */
	public function getSmiling() {
		return $this->smiling;
	}

	/**
	 * @param \stdClass $smiling
	 */
	public function setSmiling( $smiling ) {
		$this->smiling = $smiling;
	}

}