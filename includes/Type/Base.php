<?php
/**
 * Created by PhpStorm.
 * User: nguyenvanduocit
 * Date: 10/6/2015
 * Time: 2:32 PM
 */

namespace FaceCrop\Type;


class Base {
	protected $typeMap = array(
		'age'=>'\FaceCrop\Type\Age',
		'gender'=>'\FaceCrop\Type\Confidence',
		'glass'=>'\FaceCrop\Type\Confidence',
		'pose'=>'\FaceCrop\Type\Pose',
		'race'=>'\FaceCrop\Type\Confidence',
		'smiling'=>'\FaceCrop\Type\Single',
		'center'=>'\FaceCrop\Type\Point',
		'eye_right'=>'\FaceCrop\Type\Point',
		'eye_left'=>'\FaceCrop\Type\Point',
		'mouth_left'=>'\FaceCrop\Type\Point',
		'mouth_right'=>'\FaceCrop\Type\Point',
		'nose'=>'\FaceCrop\Type\Point',
		'position'=>'\FaceCrop\Type\FacePosition',
		'attribute'=>'\FaceCrop\Type\FaceAttribute',
	);

	/**
	 * FaceAttribute constructor.
	 *
	 * @param $attributes
	 *
	 */
	public function __construct( $attributes ) {

		foreach(get_object_vars($attributes) as $name => $value){
			if(property_exists(static::class, $name)){
				if(array_key_exists($name, $this->typeMap)){
					$className = $this->typeMap[$name];
					$this->$name = new $className($value);
				}
				else{
					$this->$name = $value;
				}
			}
		}
	}
}