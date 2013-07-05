<?php defined('SYSPATH') or die('No direct script access.');
class Model_Info extends ORM{
	protected $_belongs_to=array(
		'user'=>array(
			'foreign_key'=>'id'
		)
	);
}
