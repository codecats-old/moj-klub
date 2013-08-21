<?php defined('SYSPATH') or die('No direct script access.');
class Validation_General extends Validation{
	public static function is_permitted($field, $model)
	{
		$user = Auth::instance()->get_user();
		$menu = Menu::factory($model, $user);
	
		if ($menu->is_allowed($user->username, $field)) return TRUE;
		else return FALSE;
	
	}
	public static function is_unique($col, $field, $model)
	{
		return ORM::factory($model)->unique($col, $field);
	}
	public static function is_loaded($model, $value = TRUE)
	{
		if ($model->loaded() === FALSE) $model->find();
		
		return ($model->loaded() === $value) ? TRUE : FALSE;
	}
}
