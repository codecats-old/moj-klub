<?php defined('SYSPATH') or die('No direct script access.');
class HTTP_Exception_404 extends Kohana_HTTP_Exception_404{
	/*
	 * custom nice page when site is not found
	 */
	public function get_response()
	{
		$view=View::factory('Errors/404');
		
		$response=Response::factory()->status($this->_code)->body($view->render());
		return $response;
	}
}
