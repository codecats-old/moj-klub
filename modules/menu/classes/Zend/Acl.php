<?php 

use Zend\Permissions\Acl\Assertion\AssertionInterface;

use Zend\Permissions\Acl\Resource\GenericResource;

use Zend\Permissions\Acl\Role\GenericRole;

use Zend\Permissions\Acl\Acl;


defined('SYSPATH') OR die('No direct script access.');

class Zend_Acl extends Acl{
	
	/**
	 *
	 * @param mixed $user_role
	 * @param GenericResource $parent_resource
	 * @return multitype:Ambigous <boolean, NULL>
	 */
	public function get_resource_by_user($user_role, $parent_resource)
	{
		if($parent_resource === NULL) return $this->get_resource_table($user_role);
		
		$res = $this->resources[$parent_resource]['children'];
		if(empty($res) === FALSE)
		{
			$arr=array();
			foreach($res as $r)
			{
				$res_id = $r->getResourceId();
				$arr[$res_id] = $this->isAllowed($user_role, $r);
			}
			return $arr;
		}
		else
		{
			$res = $this->resources[$parent_resource]['instance'];
			return array(
					$res->getResourceId() => $this->isAllowed($user_role, $res)
			);
		}
	}
	
	public function get_resource_table($user_role)
	{
		$arr;
		foreach ($this->resources as $res => $val)
		{
			$arr[$res] = $this->isAllowed($user_role, $res);
		}
		return $arr;	
	}
	/**
	 * Magic method to call Zend CammelCase method to Kohana snake_case method
	 *
	 * @param unknown $name
	 * @param unknown $args
	 */
	public function __call($name, $args)
	{
		$func = $name;
		$arr = explode('_', $func);
		$arr = array_map('ucfirst', $arr);
		$func = implode('', $arr);
		$func = lcfirst($func);
		if(method_exists($this, $func))
		{
			return call_user_func_array(array($this, $func), $args);
		}
	}

	/**
	 *
	 *
	 * @param array $user_roles
	 * @param mixed $user_id
	 * @return Zend_Acl
	 */
	public function add_user_role($user_roles, $user_id)
	{
		$user_roles = array_map(function($role){
			return $role->name;
		}, $user_roles);

			$roles = $this->getRoles();
			$parents = array();
			foreach($user_roles as $role)
			{
				if(in_array($role, $roles))array_push($parents, $role);
			}
			$this->addRole($user_id, $parents);
			return $this;
	}
	/**
	 * New Generic Resource object
	 *
	 * @param string $name
	 * @return \Zend\Permissions\Acl\Resource\GenericResource
	 */
	public static function get_generic_resource($name)
	{
		return new GenericResource($name);
	}
}
