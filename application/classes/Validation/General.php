<?php defined('SYSPATH') or die('No direct script access.');
class Validation_General extends Validation{
	public static function is_unique($col, $field, $model)
	{
		return ORM::factory($model)->unique($col, $field);
	}
}
