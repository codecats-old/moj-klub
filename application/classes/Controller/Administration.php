<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Administration extends Controller_Automatic{
	
	public function action_index()
	{
		
	}
	
	public function action_join()
	{
		print_r($this->request->param('id'));
		
		$manager = Manager::factory('Administration', '');
	}
}
