<?php defined('SYSPATH') or die('No direct script access.');
/**
 * A simple "flash message" system.
 *
 * @package    Kohana
 * @category   Base
 * @author     Kohana Team
 * @copyright  (c) 2008-2010 Kohana Team
 * @license    http://kohanaphp.com/license
 */
class Kohana_Message {
	
	/**
	 * @var object Message singleton
	 */
	public static $instance;

	/**
	 * @var array message type, content and more properties
	 */
	protected $status;
	
	/**
	 * @var array config for default messages
	 */
	protected $config;
	
	// Message types
	const SUCCESS = 'Success';
	const NOTICE  = 'Notice';
	const WARNING = 'Warning';
	const ERROR   = 'Error';
	
	/**
	 * Message instance
	 * 
	 * @param string config name
	 * @return Kohana_Message 
	 */
	public static function instance($group='default')
	{
		$class = get_called_class();
		
		$file_config = strtolower($class);
		
		$config = Kohana::$config->load($file_config)->get($group);

		if ( ! isset(self::$instance))
		{
			self::$instance = new $class($config);
		}
		else
		{
			self::$instance->update_config($config);
		}
		
		return self::$instance;
	}
	
	/**
	 * Constructor for new Message object
	 * 
	 * @param array config
	 */
	public function __construct($config) 
	{
		$this->update_config($config);
	}
	
	/**
	 * Update configuration data
	 * 
	 * @param string
	 * @return $this
	 */
	protected function update_config($config)
	{
		$this->config = $config;
		return $this;
	}
	
	/**
	 * Adds a new message.
	 *
	 * @param   string  message type (e.g. Message::SUCCESS)
	 * @param   string  message text
	 * @param   array   any options for the message
	 * @return  $this
	 */
	public function set($state, $msg = NULL, array $properties = array() )
	{	
		if ( ! isset($this->status))
		{
			$this->status['state']=$state;
			$this->status['message']=$msg;
			
			foreach($properties as $prop=>$val)
			{
				$this->status[$prop]=$val;
			}
				
			//sets default config data
			if( ! empty($this->status['state']) AND empty($this->status['message']))
			{
				$this->status['message'] = $this->config['messages'][ $this->status['state'] ];
			}
		}
		return $this;
	}

	/**
	 * Returns all messages.
	 *
	 * @return  array or NULL
	 */
	public function get($field = NULL)
	{
		if (isset($field))
		{
			return $this->status[$field];
		}
		else
		{
			return $this->status;
		}
	}

	/**
	 * Clears all messages.
	 *
	 * @return $this
	 */
	public function clear()
	{
		$this->status = NULL;
		return $this;
	}

	/**
	 * Renders the message(s), and by default do not clears them.
	 *
	 * @param   mixed    string of the view to use, or a Kohana_View object
	 * @param   boolean  set to FALSE to not clear messages
	 * @return  string   message output (HTML)
	 */
	public function render($view = NULL, $clear = FALSE)
	{
		return $this->get_view($view, $clear)->render();
	}
	
	/**
	 * Get view for the message(s), and by default do not clears them.
	 *
	 * @param   mixed    string of the view to use, or a Kohana_View object
	 * @param   boolean  set to FALSE to not clear messages
	 * @return  View
	 */
	public function get_view($view = NULL, $clear = FALSE)
	{
		// Nothing to render
		if (($messages = $this->get()) === NULL)
			return '';
		
		// Clear all messages
		if ($clear === TRUE)
		{
			$this->clear();
		}
		
		if ($view === NULL)
		{
			// Use the config view
			$view = $this->config['view']['path'];
		}
		
		if ( ! $view instanceof Kohana_View)
		{
			// Load the view file
			$view = View::factory($view);
		}
		
		// Return the rendered view
		return $view->set('messages', $messages);
	}
}