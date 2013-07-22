<?php defined('SYSPATH') or die('No direct script access.');
class HTTP_Exception_403 extends Kohana_HTTP_Exception_403{
	public function get_response()
	{
		if(Request::initial()->is_ajax())
		{
			$view=View::factory('Errors/403');
			return Response::factory()->status($this->_code)->body($view->render());
		}
		else
		{
			return parent::get_response();
		}
	}
}
