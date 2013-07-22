<?php defined('SYSPATH') or die('No direct script access.');
class Validation_General extends Validation{
	public static function is_unique($col, $field, $model)
	{
		$obj=ORM::factory($model, array($col=>$field));
		$unique=!$obj->loaded();
		return $unique;
	}
}
