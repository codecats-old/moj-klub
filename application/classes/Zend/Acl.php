<?php 

use Zend\Permissions\Acl\Assertion\AssertionInterface;

use Zend\Permissions\Acl\Resource\GenericResource;

use Zend\Permissions\Acl\Role\GenericRole;

use Zend\Permissions\Acl\Acl;


defined('SYSPATH') or die('No direct script access.');

class Zend_Acl extends Acl{
	public function get_resource_by_user($user_role, $parent_resource)
	{
			$res=$this->resources[$parent_resource]['children'];
			$arr=array();
			foreach($res as $r)
			{	
				$res_id=$r->getResourceId();
				$arr[$res_id]=$this->isAllowed($user_role, $r)===TRUE;
			}
			return $arr;
	}
	public function __call($name, $args)
	{
		$cut=strpos($name, '_if_exist');
		if($cut>0){
			$func=substr($name, 0, $cut);
			$arr=explode('_', $func);
			$arr = array_map('ucfirst', $arr);
			$func=implode('', $arr);
			$func=lcfirst($func);
			if(method_exists($this, $func))
			{
				if($this->hasRole($args[0]))
				{
					return call_user_func_array(array($this, $func), $args);
				}
				return $this;
			}
		}
		else
		{
			throw new Exception('function '.$name.' is undefined');
		}
		
	}
	public function prepare_roles($role_parent, $roles_container)
	{
		$roles=Arr::get($roles_container, 'roles');
		$id=Arr::get($roles_container, 'id');
		foreach($roles as $role)
		{
			$this->addRole(new GenericRole( $role->$id ));
		}
		$this->addRole(new GenericRole($role_parent), $this->getRoles());
		return $this;
	}
	/*
	public function allow_if_exist($roles = null, $resources = null, 
				$privileges = null, Assertion\AssertionInterface $assert = null)
	{
		if($this->hasRole($roles))return parent::allow($roles, $resources, $privileges, $assert);
		return $this;	
	}
	public function deny_if_exists($roles = null, $resources = null, 
				$privileges = null, Assertion\AssertionInterface $assert = null)
	{
		if($this->hasRole($roles))return parent::deny(roles, resources, privileges, assert);
		return $this;
	}
	public function add_role_if_exists($role, $parents = null)
    {
    	if($this->hasRole($roles))return parent::addRole($role, $parents);
    	return $this;
    }
    */
}
