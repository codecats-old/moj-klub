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

class Menu_Management extends Menu_General{

	public function prepare_resources()
	{		
		$resource = Menu::get_generic_resource('consideration');
		$this->add_resource($resource);
		
		//manipulate consideration
		$this	->add_resource('accept', 'consideration')
				->add_resource('refuse', 'consideration')
				->add_resource('cancel', 'consideration');
		
		$resource = Menu::get_generic_resource('join');
		$this->add_resource($resource);
		
		//manipulate joining the team
		$this	->add_resource('send_join', 	'join')
				->add_resource('cancel_join', 	'join')
				->add_resource('delete_join', 	'join');

		return $this;
	}
	
	public function prepare_permissions($user)
	{
		$this
			->add_role('guest')
			//player
			->add_role('player', 'guest')
			->allow('player', 'join')
			//capitan
			->add_role('capitan', 'player')
	
			//coach
			->add_role('coach', 'capitan')
	
			//manager
			->add_role('manager', 'coach')
			->allow('manager', 'consideration')
			//admin
			->add_role('admin', 'manager');

		
		return parent::prepare_permissions($user);
	}
	/**
	 * Deny consideration if: 
	 * 	- manager is not a member of team,
	 * Deny join if:
	 *  - user sent request (deny sent_join)
	 *  - request was considered (deny cancel and / or join)
	 *  - user has a team already
	 *
	 * @param ORM $resource
	 * @param ORM $resource_owner
	 */
	public function deny_permissions($resource, $resource_owner)
	{
		/**
		 * Rights by field active
		 * 
		 * @see the table
		 */
		if ($resource->active == TRUE)
		{
			//join is waiting for consideration so sent again is not allowed
			$this->deny($resource_owner->username, 'send_join');
		}
		else
		{
			//join was considered now manager can do modifications
			$this->deny($resource_owner->username, 'join');
		}
		
		/**
		 * if resource owner has a team deny join or cancel join
		 */
		if ($resource_owner->team->loaded())
		{
			$this->deny($resource_owner->username, 'join');
			
			/**
			 * If resource owner has difference team than resource so deny consideration:
			 * it means manager is member of difference team than request was sent
			 */
			if ($resource_owner->team->id !== $resource->team_id)
			{
				$this->deny($resource_owner->username, 'consideration');
			}
		}
		
		/**
		 * If join is considered it can be deleted only by moderator
		 */
		if ($this->is_allowed($resource_owner->username, 'consideration') AND $resource->active == FALSE)
		{
			$this->deny($resource_owner->username, 'consideration');
			$this->allow($resource_owner->username, 'delete_join');
		}
		/**
		 * If no resource deny consideration but can join
		 */
		if ( ! $resource->loaded())
		{
			$this->deny('player', array('consideration', 'join'));
			$this->allow('player', array('send_join'));
		}
		return $this;
	}
}
