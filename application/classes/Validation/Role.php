<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Check rules to change role on given user in specific team
 * 
 * @author t
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
			),
			array(
				'Validation_role::unique_team_role',
				array(
					':value',
					':post',
					':unique_roles'
					
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
	
	/**
	 * If user has unique team role, check if this role exists in $post only once. 
	 * 
	 * unique roles is : manager, coach and capitan
	 * 
	 * @param Model $user_change
	 * @param array $post
	 * @return boolean
	 */
	public static function unique_team_role($user_change, $post, $unique_roles)
	{
		$unique = TRUE;
		
		foreach ($unique_roles as $unique_role)
		{
			if ($unique === TRUE)
			{
				$role = ORM::factory('Role', array('name' => $unique_role));
				if ($user_change->has('roles', $role))
				{
					//user has unique role so it has to be exists in $post array
					$unique = FALSE;
					$count = 0;
					foreach ($post as $roles)
					{
						if (is_array($roles) AND array_search($role->id, $roles) !== FALSE)	$count++;
					}
					if ($count === 1) $unique = TRUE;
				}
			}
		}

		
		return $unique;		
	}
	
	/**
	 * After changes user can't be without any role in the team
	 * 
	 * @param Model $user_change
	 * @param array $post
	 * @return boolean
	 */
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
	
	/**
	 * New changes has to contain any role.
	 * 
	 * @param array $post
	 * @return boolean
	 */
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
	
	/**
	 * Check if user can manipulate on some role.
	 * 
	 * @param Model $user
	 * @param Model $user_change
	 * @param Menu $menu
	 * @param array $post
	 * @return boolean
	 */
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
	
	/**
	 * Check if user can manipulate on given scopes
	 * 
	 * @param Model $user
	 * @param Model $user_change
	 * @param array $scopes
	 * @param array $menu
	 * @return boolean
	 */
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

	/**
	 * Check post array (it's quick pre-validation 
	 * before general validation wchich needs many resources.
	 * @return Validation
	 */
	public function post()
	{
		$object = Validation::factory($this->data());
		$object = $this->rules('post', $this->rules_change['post']);

		return $object;
	}
	
	/**
	 * Check new roles
	 * 
	 * @param Model $user_change
	 * @param array $scopes
	 * @return Validation
	 */
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
			->bind(':unique_roles', Manager_Role::$unique_roles)
		;
		$object
			->rules('user_change', $this->rules_change['roles'])
		;
		
		return $object;
	}
	
	/**
	 * Check if role is allowed to scope.
	 * 
	 * @param array $scopes
	 * @param Model $user
	 * @return Validation
	 */
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