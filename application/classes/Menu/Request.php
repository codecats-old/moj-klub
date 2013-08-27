<?php defined('SYSPATH') OR die('No direct script acccess.');
/**
 * 	REQUEST:
 *  +-----------+-----------+-------------------------------------------------------------------+
 *	| STATUS 	| 	ACTIVE 	| 	Explanation														|
 *	+-----------+-----------+-------------------------------------------------------------------+
 *	|	-		|	1		|	User can do any modification of request							|
 *	| 	1 		|	0		|	Administrator accepted request - user have no write permissions	|
 *	| 	0		|	0		|	Administrator refused request - user have no write permission	|
 *	| 	0		|	1		|	Administrator canceled request -user have write permmission 	|
 *	+-----------+-----------+-------------------------------------------------------------------+
 *
 * @author t
 *
 */

class Menu_Request extends Menu_General{

	public function prepare_resources()
	{		
		$resource = Menu::get_generic_resource('modification');
		$this->add_resource($resource);

		$resource = Menu::get_generic_resource('status');
		$this->add_resource($resource);
		
		$this
			->add_resource('status_accepted', 	'status')
			->add_resource('status_refused', 	'status')
			->add_resource('status_canceled', 	'status')
			->add_resource('status_unread',		'status');
		
		$resource = Menu::get_generic_resource('management');
		$this->add_resource($resource);
		
		$resource = Menu::get_generic_resource('owner');
		$this->add_resource($resource);
		return $this;
	}
	
	public function prepare_permissions($user)
	{
		$this
			->add_role('guest')
			//player
			->add_role('player', 'guest')

			//capitan
			->add_role('capitan', 'player')
	
			//coach
			->add_role('coach', 'capitan')
	
			//manager
			->add_role('manager', 'coach')
			->allow('manager', 'management')
			//admin
			->add_role('admin', 'manager');
		
		return parent::prepare_permissions($user);
	}
	public function deny_permissions($request)
	{
		/**
		 * Check for write permission
		 */
		if ($request->active == TRUE)
		{
			if ($request->team_id === $this->user->team_id
				OR
				$request->user_id === $this->user->id
			)
			{
				$this->allow('player', 'modification');
			}
		}
		else
		{
			$this->allow('manager', 'modification');
		}
		
		/**
		 * What status menu to show
		 */
		if ($request->status == TRUE)
		{
			$this->allow('player', 'status_accepted');
		}
		else 
		{
			if ($request->active == FALSE)
			{
				$this->allow('player', 'status_refused');
			}
			else
			{
				if( ! empty($request->read))
				{
					$this->allow('player', 'status_canceled');
				}
				else
				{
					$this->allow('player', 'status_unread');
				}
			}
		}
		
		/**
		 * Mark owner resource for user
		 */
		if ($request->user_id === $this->user->id)
		{
			$this->allow('player', 'owner');
		}
		
		return $this;
	}
}
