<?php defined('SYSPATH') OR die('No direct script access.');

class Notificator{
	
	const KEY 		= 'NotificatiorKEY';
	
	//60*60*2 = 7200 : 2 minutes
	const DURATION	= 10; 
	
	protected $user;
	
	protected $team;

	public function __construct($user, $team)
	{
		$this->user = $user;
		$this->team = $team;
	}
	
	public function is_user_unread_messages ()
	{
	
		$set_notification = FALSE;
		$user = $this->user;
		if ( ! $user) return FALSE;
	
		$last_login = $user->last_login;
	
		echo 'read: '.$user->request->find()->read;
		echo '<br>';
		echo 'log:  '.date('Y-m-d H:i:s', $last_login - 1209600 );
	
		$unread = $user->request
			->where('read_recipient', '=', NULL)
			->where('date', '>', date('Y-m-d H:i:s', $last_login - 1209600))->find();//60*60*24*14
	
		return $unread->loaded();
	
	}
	public function is_team_unread_messages ()
	{
		$set_notification = FALSE;
		$team = $this->team;
		if ( ! $team) return FALSE;
		
		return FALSE;
	}
	public function set_unread ()
	{
		self::start_blink();
	}
	public static function stop_blink ()
	{
		$session = Session::instance()->get(self::KEY);
		$session['blink'] = FALSE;
		Session::instance()->set(self::KEY, $session);
		
		return $this;
	}
	public static function start_blink ($from_time = NULL, $to_time = NULL)
	{
		if ($from_time === NULL)
		{
			$from_time = time();
		}
		if ($to_time === NULL)
		{
			$to_time = $from_time + self::DURATION;
		}
		
		
		Session::instance()->set(self::KEY,
			array(
				'blink' 	=> TRUE,
				'from' 		=> $from_time,
				'to' 		=> $to_time
			)
		);
	
	}
	protected static function update_status ($active)
	{
		$session = Session::instance()->get(self::KEY);
		$session['active'] = $active;
		Session::instance()->set(self::KEY, $session);

	}
	/**
	 * check blinking status, return current status
	 */
	public static function update_blink ()
	{
		$session = Session::instance()->get(self::KEY);
		$now = time();
		$active = TRUE;
		$to_time = isset($session['to']) ? $session['to'] : 0;
		$from_time = isset($session['from']) ? $session['from'] : 0;
		if ($to_time < $now)
		{
			$active = FALSE;
			self::update_status($active);
		}
		
		return array(
			'active' 	=> $active,
			'from'		=> $from_time,
			'to' 		=> $to_time
		);
	}
}
