<?php defined('SYSPATH') or die('No direct script access.');

class Filter{
	public function get_team()
	{
		return $this->team_array;
	}
	protected $team_array=array(
		'short_name'=>array(
			array('trim'),
			array('strtolower'),
			array('ucwords')
		),
		'full_name'=>array(
			array('trim'),
			array('ucwords')
		),
		'description'=>array(
			array('trim')
		),
		'street'=>array(
			array('trim'),
			array('ucwords')
		),
		'street_no'=>array(
			array('trim')
		),
		'city'=>array(
			array('trim'),
			array('ucwords')
		),
		'success'=>array(
			array('trim')
		)
	);
}
