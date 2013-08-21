<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * 
 * @author t
 *
 * Model fields explanation: status, active.
 * If request admininstration read the request by user then active is setted to FALSE and all
 * requests actions (field status) is setted by administrator and blocked to changes by user. 
 * When field active is TRUE it means request administrator havent read the request so user
 * can modificate and delete the request.  
 * 
 *  +-----------+-----------+-------------------------------------------------------------------+
 *	| STATUS 	| 	ACTIVE 	| 	Explanation														|
 *	+-----------+-----------+-------------------------------------------------------------------+
 *	|	-		|	1		|	User can do any modification of request							|
 *	| 	1 		|	0		|	Administrator accepted request - user have no write permissions	|
 *	| 	0		|	0		|	Administrator refused request - user have no write permission	|
 *	| 	0		|	1		|	Administrator canceled request -user have write permmission 	|
 *	+-----------+-----------+-------------------------------------------------------------------+
 */	
class Model_Request extends ORM{
	
	protected $_belongs_to = array(
			'user' 	=> array(
			),
			'team' 	=> array(
			)
	);
	
/*	protected $_has_many = array(
		'user' => array(
			'model' => 'User',
		)
	);*/
	
	public function validate_join($user_id, $team_id)
	{
		$validation = new Validation_Request(
			array(
				'user_id' 	=> $user_id,
				'team_id' 	=> $team_id,
				'request'	=> $this
			)
		);
		return $validation->join();
	}
	
	public function validate_join_cancel($user_id, $team_id)
	{
		$validation = new Validation_Request( 
			array(
				'user_id' 	=> $user_id, 
				'team_id' 	=> $team_id,
				'request' 	=> $this
			)
		);
		return $validation->join_cancel();
		
	}
}
