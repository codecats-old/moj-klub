<?php 

use Zend\Permissions\Acl\Assertion\AssertionInterface;

use Zend\Permissions\Acl\Resource\GenericResource;

use Zend\Permissions\Acl\Role\GenericRole;

use Zend\Permissions\Acl\Acl;


defined('SYSPATH') or die('No direct script access.');

class Zend_Acl extends Acl{
	/**
	 * TESTING MODULE - dirty code
	 * @var unknown
	 */
	protected static $instance=NULL;
	public static function instance()
	{
		if(isset(self::$instance)===FALSE)
		{
			self::$instance=new self;
		}
		return self::$instance;
	}
	public function get_resource_by_user($user_role, $parent_resource)
	{
		$res=$this->resources[$parent_resource]['children'];
		if(empty($res)===FALSE)
		{
			$arr=array();
			foreach($res as $r)
			{	
				$res_id=$r->getResourceId();
				$arr[$res_id]=$this->isAllowed($user_role, $r);
			}
			return $arr;
		}
		else 
		{
			$res=$this->resources[$parent_resource]['instance'];
			return array($res->getResourceId()=>$this->isAllowed($user_role, $res));
		}
	}
	public function __call($name, $args)
	{
	/*	$cut=strpos($name, '_if_exist');
		if($cut>0)
		{
			$func=substr($name, 0, $cut);*/
			$func=$name;
			$arr=explode('_', $func);
			$arr = array_map('ucfirst', $arr);
			$func=implode('', $arr);
			$func=lcfirst($func);
			if(method_exists($this, $func))
			{
			//	if($this->hasRole($args[0]))
				//{
					return call_user_func_array(array($this, $func), $args);
			//	}
			//	return $this;
			}
			else
			{
				throw new ErrorException('function '.$name.' is undefined');
			}
		/*
		}
		else
		{
			throw new ErrorException('function '.$name.' is undefined');
		}
		*/
	}
	public function add_user_role($user_roles, $user_id)
	{
		$user_roles=array_map(function($role){return $role->name;}, $user_roles);
		$roles=$this->getRoles();
		$parents=array();
		foreach($user_roles as $role)
		{
			if(in_array($role, $roles))array_push($parents, $role);
		}
		$this->addRole($user_id, $parents);
		return $this;
	}
	/*public function prepare_roles($role_parent, $roles_container)
	{
		$roles=Arr::get($roles_container, 'roles');
		$id=Arr::get($roles_container, 'id');
		foreach($roles as $role)
		{
			$this->addRole(new GenericRole( $role->$id ));
		}
		$this->addRole(new GenericRole($role_parent), $this->getRoles());
		return $this;
	}*/
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
