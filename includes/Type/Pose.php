<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:28 PM
 */

namespace FaceCrop\Type;


class Pose {
	/**
	 * @return Single
	 */
	public function getPitchAngle() {
		return $this->pitch_angle;
	}

	/**
	 * @param Single $pitch_angle
	 */
	public function setPitchAngle( $pitch_angle ) {
		$this->pitch_angle = $pitch_angle;
	}

	/**
	 * @return Single
	 */
	public function getRollAngle() {
		return $this->roll_angle;
	}

	/**
	 * @param Single $roll_angle
	 */
	public function setRollAngle( $roll_angle ) {
		$this->roll_angle = $roll_angle;
	}

	/**
	 * @return Single
	 */
	public function getYawAngle() {
		return $this->yaw_angle;
	}

	/**
	 * @param Single $yaw_angle
	 */
	public function setYawAngle( $yaw_angle ) {
		$this->yaw_angle = $yaw_angle;
	}
	/**
	 * @var Single
	 */
	public $pitch_angle;
	/**
	 * @var Single
	 */
	public $roll_angle;
	/**
	 * @var Single
	 */
	public $yaw_angle;

}