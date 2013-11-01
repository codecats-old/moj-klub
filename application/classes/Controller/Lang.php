<?php defined('SYSPATH') OR die('No direct script access.');

class Controller_Lang extends Controller {
	protected $language = 'en-us';
	
	public function after()
	{
		parent::after();
		Cookie::set('lang',$this->language);
		/**
		 * Controller automatic read cookie so line below is commented
		 */
		//I18n::lang($this->language);
		HTTP::redirect();
	}
	
	public function action_index(){}
	
	public function action_pl() {
		$this->language = 'pl-pl';

	}
	public function action_en() {
		$this->language = 'en-us';
	}
}
