<?php defined('SYSPATH') or die('No direct script access.');

class Validation_Image extends Validation_General{
	
	protected $rules_avatar=array(
		'avatar'=>array(
			array('Upload::not_empty'),
			array('Upload::valid'),
			array('Upload::type', array(':value', array('jpg', 'jpeg', 'png', 'gif'))),
			array('Upload::size', array(':value' ,'100K'))
		)
	);
	protected $rules_photo = array(
		'add_photo' => array(
			array('Upload::not_empty'),
			array('Upload::valid'),
			array('Upload::type', array(':value', array('jpg', 'jpeg', 'png', 'gif'))),
			array('Upload::size', array(':value' ,'1M')),
			array('Validation_Image::is_permitted', array(':field', 'Gallery'))
		),
			/**
			 * check if id is not empty, user is permitted to delete photos, photo belongs to specific team.
			 */
		'delete_photo' => array(
				array('not_empty'),
				array('digit'),
				//deleting Team photo so we need resource name :field and model name Team which has the resource
				array('Validation_Image::is_permitted', array(':field', 'Gallery'))//,
		),
		'exist' => array(
			array('Validation_Image::is_exists', array(':id', ':value'))
		)
	);
	/**
	 * Check if given value is id of user's club
	 * @param <int, string> $val
	 * @return boolean
	 */
	public static function is_member($val)
	{
		$team_id = Auth::instance()->get_user()->team->id;
		return ($team_id === $val);
	}
	/**
	 * The same method: is unique but this one get specific query to execute but before add
	 * some data in where statemnt
	 */
	public static function is_exists($id, $model)
	{
		
		if( ! $model->loaded())$model->where('id', '=', $id)->limit(1)->find();

		return $model->loaded();
	}
	public function avatar()
	{
		$object=Validation::factory($this->_data);
		$object->rules('avatar', $this->rules_avatar['avatar']);
		return $object;
	}
	
	public function add_photo()
	{
		$object = Validation::factory($this->_data);
		$object->rules('add_photo', $this->rules_photo['add_photo']);
		return $object;
	}
	public function delete_photo()
	{
		$object = Validation::factory($this->_data);

		$object->bind(':id', $this->_data['delete_photo']);

		$object->rules('delete_photo', $this->rules_photo['delete_photo'])
			->rules('photos', $this->rules_photo['exist']);
		return $object;
	}

}