<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Header_Menu_Access extends Controller{
	public function __construct()
	{
	
	}
	public function get_menu()
	{
		if(Auth::instance()->logged_in())
		{
			return View::factory('Header/Loged');
		}
		else 
		{
			return View::factory('Header/Access');
		}
	}
}
