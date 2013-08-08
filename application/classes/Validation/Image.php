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
			array('Upload::size', array(':value' ,'1M'))
		),
			/**
			 * check if not empty, user is permitted to delete photos, photo belongs to specific team and 
			 * user belongs to the same team which photo came from.
			 */
		'delete_photo' => array(
			array('not_empty'),
			//deleting Team photo so we need resource name :field and model name Team which has the resource
			array('Validation_Image::is_permitted', array(':field', 'Team')),
			array('in_array', array(':value', ':photos'))
		),
		'team_id' => array(
			array('Validation_Image::is_member', array(':value'))
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

		$object->bind(':photos', $this->_data['photos']);

		$object->rules('delete_photo', $this->rules_photo['delete_photo'])
			->rules('team_id', $this->rules_photo['team_id']);
		return $object;
	}

}