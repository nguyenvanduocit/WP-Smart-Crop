<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:29 PM
 */

namespace FaceCrop\Type;


class Single extends Base{
	/**
	 * @var string|int|float
	 */
	protected $value;

	/**
	 * @return float|int|string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float|int|string $value
	 */
	public function setValue( $value ) {
		$this->value = $value;
	}
}