<?php defined('SYSPATH') OR die('No direct script access.');

class Manager_Gallery extends Manager_Data{

	private $gallery_id;
	/**
	 * Logged in user
	 *
	 * @var ORM
	 */
	protected $user;
	
	/**
	 * Helps manipulate teams action on logged in user
	 * 
	 * @param ORM $user
	 */
	public function set_user($user)
	{
		$this->user = $user;
	}
	/*ACTIONS*/
	

	public function add_photo($post)
	{
		$json_pack=Request::factory(
				Route::get('default')->uri(
						array('controller'=>'image', 'action'=>'add-team-photo')
				)
		)
		->post($post)
		->execute();
		$json_pack=json_decode($json_pack);
		
		$this->set_add_photo_result($json_pack);
	}
	
	public function set_add_photo_result($pack)
	{
		$team_id = Auth::instance()->get_user()->team->id;
		$this->set_gallery_result($team_id);
		
		$this->view_content=unserialize($pack->View);
		
		
		
		if ( Message::instance()->get('state') === Message::SUCCESS)
		{
			//show success and reload
			Message::instance()->set(
				$pack->status->state, 
				$pack->status->message, 
				//jquery not ajax support files so redirect by header
				array(
					'reload' => TRUE
				)
			);
			HTTP::redirect(Route::get('default')->uri(
				array(
					'controller' 	=> 'gallery',
					'action'		=> 'team',
					'id'			=> Coder::instance()->to_url($team_id)							
				))
			);
			
			$this->view_container->set('info_content', $this->view_content);
			
		}
		else
		{
			//show Warning in view_top place
			$this->view_container->set('view_top', $this->view_content);
		}
		
	}
	public function delete_photo($id, $confirm)
	{
		
		$id = Coder::instance()->from_url($id);
		
		//confirm is a string with true or nothing
		if ($confirm == TRUE)
		{
			$json_pack=Request::factory(
					Route::get('default')->uri(
							array(
								'controller'=>'image', 
								'action'=>'delete-team-photo',
								'id' => Coder::instance()->to_url($id)
							)
					)
			)
			->execute();
			$json_pack=json_decode($json_pack);
			
			$this->set_delete_photo_result($json_pack);
		}
		else
		{
			$photo = ORM::factory('Photo', $id);
			
			$this->set_gallery_result(Auth::instance()->get_user()->team->id);
			
			$confirm_view = View::factory('Component/Info/Gallery/Confirm')
				->set('photo', $photo->as_array());
			//content of modal window
			$this->view_container->set('info_content', $confirm_view);
			$this->view_content = $confirm_view;
		}
	}
	public function set_delete_photo_result($pack)
	{
		$this->view_content=unserialize($pack->View);
		
		Message::instance()->set($pack->status->state, $pack->status->message);
	}
	/**
	 * 
	 * @param int $id - team_id
	 */
	public function gallery($id)
	{
		$id = Coder::instance()->from_url($id);
		$this->set_gallery_result($id);
	}
	public function set_gallery_result($id)
	{
		$this->gallery_id = $id;
		$this->set_view_details($this->view_container);
	}

	/**
	 * Default view details
	 * @see Kohana_Interface_Manager::set_view_details()
	 */
	public function set_view_details($view)
	{
		$team = $this->object;
		
		$user = $this->user;
		
		$id = $this->gallery_id;

		$menu = Menu::factory('Gallery', $user);
		// user can be not logged in
		$submenu = NULL;
		if ($user !== NULL){
			$submenu = $menu->get_resource_by_user($user->username, 'gallery');
		}
		
		$component_gallery = View::factory('Component/Gallery')
			->set('menu', $submenu)
			->set('photos', ORM::factory('Photo')->get_team_photos($id)->find_all()->as_array())
			->set('team', $team->as_array());
		
		
		$this->view_container = View::factory('Container/Gallery/Main')
			->set('modal_title', 'confirm')
			->set('active', array('gallery' => 'active'))
			->set('view_component_about', $component_gallery);
		

		if ($team->loaded() === TRUE)
		{
			$this->view_container->set('team', $team->as_array());
		}
		return $this;
	}

	/**
	 * Default data set form post to object
	 * @see Kohana_Interface_Manager::set_data()
	 */
	public function set_data($data)	{}

}