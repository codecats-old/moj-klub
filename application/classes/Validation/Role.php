<?php defined('SYSPATH') OR die('No direct script access.');
/*
 *TODO: Team without manager is non-sense so principle manager_exists has to be created.
 *
 */
class Validation_Role extends Validation_General{
	
	protected $rules_change = array(
		'roles' => array(
			array(
				'Validation_Role::user_has_permission_to_role', 
				array(
					':user',
					':value',
					':menu',
					':post'
				)
			),
			array(
				'Validation_Role::user_has_team_role',
				array(
					':value',
					':post'
				)
			),
			array(
				'Validation_Role::user_has_permission_to_scope',
				array(
					':user',
					':value',
					':scopes',
					':menu'
				)
			)
		),
		'post' 	=> array(
			array(
				'Validation_Role::post_with_roles',
				array(
					':value'
				)
			)
		),
		'scopes' => array(
			array(
				'Validation_Role::user_has_permission_to_scope',
				array(
						':user',
						':user_change',
						':value',
						':menu'
				)
			)
		)
	);
	public static function user_has_team_role($user_change, $post)
	{
		
		if (key_exists($user_change->username, $post))
		{
			return TRUE;
		}
		else 
		{
			return FALSE;
		}
	}
	public static function post_with_roles($post)
	{
		
		$post_has_role = FALSE;
		if (is_array($post))
		{		
			foreach($post as $user_name => $roles)
			{
				if (is_array($post[$user_name]) AND empty($post[$user_name]) === FALSE)
				{
					return TRUE;
				} 
					
			}
		}
		else
		{
			$post_has_role = FALSE;			
		}
		return $post_has_role;
	}
	public static function user_has_permission_to_role($user, $user_change, $menu, $post)
	{
		$allowed = TRUE;
	
		if (key_exists($user_change->username, $post))
		{
			$roles = $post[$user_change->username];
			foreach ($roles as $id)
			{
				if ( ! $menu->is_allowed($user->username, $id))
				{
					$allowed = FALSE;
				}
			}
		}
		return $allowed;
	}
	public static function user_has_permission_to_scope($user, $user_change, $scopes, $menu)
	{
		$allow_changes = TRUE;

		foreach ($scopes as $scope)
		{
			/**
			 * If user_change has no role in scope don't check because changes are in difference scope 
			 */
			if (self::is_role($user_change, $scope))
			{
				if ($menu->is_allowed($user->username, $scope) === FALSE)
				{
					$allow_changes = FALSE;
				}
			}
		}
		return $allow_changes;
	}
	/**
	 * Check is role_name allowed for user
	 *
	 * @param Model $user
	 * @param string $role_name
	 */
	public static function is_role($user, $role_name)
	{
		$menu = Menu::factory('Team', $user);
		return $menu->is_allowed($user->username, $role_name);
	}

	public function post()
	{
		$object = Validation::factory($this->data());
		$object = $this->rules('post', $this->rules_change['post']);

		return $object;
	}
	public function change($user_change, $scopes)
	{
		$arr 				= $this->data();
		$arr['user_change'] = $user_change;
		$arr['scopes'] 		= $scopes;
		
		$object = Validation::factory($arr);
		$object
			->bind(':post', 		$arr['post'])
			->bind(':user', 		$arr['user'])
			->bind(':menu', 		$arr['menu'])
			->bind(':scopes',		$arr['scopes'])
		;
		$object
			->rules('user_change', $this->rules_change['roles'])
		;
		
		return $object;
	}
	
	public function role_allowed($scopes, $user)
	{
		$arr 				= $this->data();
		$arr['scopes'] 		= $scopes;
		$arr['user_change'] = $user;

		
		$object = Validation::factory($arr);
		$object
			->bind(':user', 		$arr['user'])
			->bind(':user_change', 	$arr['user_change'])
			->bind(':menu', 		$arr['menu'])
		;
	
		$object->rules('scopes', $this->rules_change['scopes']);
		return $object;
	}

}