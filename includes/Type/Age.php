<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:19 PM
 */

namespace FaceCrop\Type;


class Age extends  Single{
	public $range;
	/**
	 * @return int
	 */
	public function getRange() {
		return $this->range;
	}

	/**
	 * @param int $range
	 *
	 * @return Age
	 */
	public function setRange( $range ) {
		$this->range = $range;

		return $this;
	}
}