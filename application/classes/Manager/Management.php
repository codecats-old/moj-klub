<?php defined('SYSPATH') OR die('No direct script access.');

/**
 *
 * @author t
 *
 * Manipulate with views and object data - work like controller with low level staff,
 * actions of managers called always from controller.
 * 
 */
class Manager_Management extends Manager_Data{
	
	/**
	 * Team object context
	 * 
	 * @var ORM
	 */
	private $team 		= NULL;
	private $master 	= NULL;
	private $new_member = NULL;
	protected $menu		= NULL;
	
	protected function __initialize()
	{
		$this->menu = Menu::factory('Management', $this->master);
		$this->menu->deny_permissions($this->object, $this->master);
	}
	
	public function consider_operation($operation)
	{
		if ( ! $this->menu->is_allowed($this->master->username, 'consideration')) return FALSE;
		
		switch ($operation)
		{
			case 'accept' :
				$this->consider_accept();
				break;
			case 'refuse' :
				$this->consider_refuse();
				break;
			case 'cancel' :
				$this->consider_cancel();
				break;
			default :
				break;
		}
		$this->set_consider_operation_result();
		
		return TRUE;
	}
	public function set_consider_operation_result()
	{
		$this->view_content = $this->get_view_detail_single();
		$this->view_container = current($this->get_view_detail_single());
	}
	protected function join_club()
	{

	}
	protected function cancel_join_club()
	{
		
	}
	protected function consider_accept()
	{
		/**
		 * Set join info: deactive other request from member, 
		 * set status for accepted request
		 */
		$requests = $this->new_member->request->find_all();
		
		
		/**
		 * Deactive other user's requests, sets suitable status for accepted request
		 */
		foreach ($requests as $request)
		{
			/**
			 * Set considered request status
			 */
			if ($request->id === $this->object->id)
			{
				//debug:
				$this->object = $request;
				//
				
				$request->status = TRUE;
	
			}

			$request->active 	= FALSE;
			$request->read 		= Date::formatted_time();
			//			$request->update();

		}
		/**
		 * Set new team member
		 */
		$this->new_member->team = $this->team;
//		$this->new_member->update();

	}
	/**
	 * Set status for current request to null and read time
	 */
	protected function consider_refuse()
	{
	///	$request = $this->new_member->request->where('team_id', '=', $this->team->id)->find();
		$request = $this->object;
		$request->active = $request->status = FALSE;
		$request->read = Date::formatted_time();
//		$request->update();
	}
	protected function consider_cancel()
	{
		///$request = $this->new_member->request->where('team_id', '=', $this->team->id)->find();
		$request = $this->object;
		$request->active = TRUE;
		$request->status = FALSE;
		$request->read = Date::formatted_time();
//		$request->update();
	}
	/**
	 * Set all needed objects 
	 */
	public function set_objects(array $objects)
	{
		$this->team 		= isset($objects['team']) ? $objects['team'] : NULL;
		$this->master 		= isset($objects['master']) ? $objects['master'] : NULL;
		$this->new_member 	= isset($objects['new_member']) ? $objects['new_member'] : NULL;
		$this->__initialize();
		
		return $this;
	}
	/**
	 * Default view details
	 * @see Kohana_Interface_Manager::set_view_details()
	 */
	public function set_view_details($view)
	{

		return $this;
	}
	/**
	 * Sets view details of single request
	 * 
	 * @param View $view
	 * @param ORM $request
	 */
	public function get_view_detail_single()
	{
		$menu = Menu::factory('Request', $this->master);
		$menu->deny_permissions($this->object);
		
		$view = View::factory('Component/Request/Single',
				array(
					'status' 	=> $menu->get_resource_by_user($this->master, NULL),
					'user' 		=> $this->new_member->as_array(),
					'request'	=> $this->object->as_array(),
					'id' 		=> $this->object->id
				)
		);
		return array(
				$this->object->id 	=> $view 
		);
	}
	
	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data)
	{

	}
}
