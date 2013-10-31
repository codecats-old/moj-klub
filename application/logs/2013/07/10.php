<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-10 10:34:10 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/Component/Form/Login.php [ 10 ] in /home/t/www/moj-klub/application/views/Component/Form/Login.php:10
2013-07-10 10:34:10 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Form/Login.php(10): Kohana_Core::error_handler(8, 'Array to string...', '/home/t/www/moj...', 10, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(18): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/application/views/Component/Form/Login.php:10
2013-07-10 10:34:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function a__() ~ APPPATH/classes/Controller/User.php [ 31 ] in :
2013-07-10 10:34:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-10 13:56:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 13 ] in :
2013-07-10 13:56:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-10 13:57:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 18 ] in /home/t/www/moj-klub/application/views/Template.php:18
2013-07-10 13:57:43 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 18, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(13): Kohana_View::factory(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/application/views/Template.php:18
2013-07-10 13:57:44 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 18 ] in /home/t/www/moj-klub/application/views/Template.php:18
2013-07-10 13:57:44 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 18, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(13): Kohana_View::factory(Object(View))
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/application/views/Template.php:18
2013-07-10 13:57:44 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: view_container
	
		APPPATH/views/Template.php [ 18 ]
		13         
14     &lt;/head&gt;
15     &lt;body&gt;
16 &lt;?php echo View::factory('Header/Header')-&gt;set('user', $user);?&gt;
17 
18 &lt;?php echo $view_container;?&gt;
19 
20 &lt;?php echo View::factory('Footer/Footer');?&gt;
21 	&lt;/body&gt;
22 &lt;/html&gt;		
					
				
					
													APPPATH/views/Template.php [ 18 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(34) "Undefined variable: view_container"
						
											
							2
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
											
							3
							integer 18
						
											
							4
							array(4) (
    "kohana_view_filename" => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    "kohana_view_data" => array(0) 
    "page_title" => string(7) "Welcome"
    "user" => array(0) 
)
						
										
				
													13         
14     &lt;/head&gt;
15     &lt;body&gt;
16 &lt;?php echo View::factory('Header/Header')-&gt;set('user', $user);?&gt;
17 
18 &lt;?php echo $view_container;?&gt;
19 
20 &lt;?php echo View::factory('Footer/Footer');?&gt;
21 	&lt;/body&gt;
22 &lt;/html&gt;
							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/classes/Controller/Automatic.php [ 13 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
										
				
													 8 //		View::bind_global('view_container', $this-&gt;view_container);
 9 //		$this-&gt;view_container=View::factory('Container/Main');
10 		$this-&gt;page_title=$this-&gt;request-&gt;controller();
11 		if(Auth::instance()-&gt;logged_in()===TRUE)
12 		{
13 			View::factory($this-&gt;template)-&gt;set('user', Auth::instance()-&gt;get_user()-&gt;as_array());
14 		}
15 		
16 	}
17 	public function after(){
18 		if($this-&gt;auto_render===FALSE)

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 69 ]
											
					&raquo;
					Controller_Automatic->before()
				
													64 	 * @return  Response
65 	 */
66 	public function execute()
67 	{
68 		// Execute the "before action" method
69 		$this-&gt;before();
70 
71 		// Determine the action to use
72 		$action = 'action_'.$this-&gt;request-&gt;action();
73 
74 		// If the action doesn't exist, it's a 404

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Welcome(8) {
    public template => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
    public page_title => string(7) "Welcome"
    public view_container => NULL
    public view_content => NULL
    public status => NULL
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => string(51) "http://localhost/moj-klub/index.php/user/registrate"
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(7) "welcome"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(7) "Welcome"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(7) (
            "__utma" => NULL
            "__utmz" => NULL
            "__utmv" => NULL
            "cookies_info" => NULL
            "onet_cinfo" => NULL
            "authautologin" => string(40) "3d10ed87dfdfd5adc455d5ba0f84a8b94ae474c7"
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => string(51) "http://localhost/moj-klub/index.php/user/registrate"
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(7) "welcome"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(7) "Welcome"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(7) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
        "authautologin" => string(40) "3d10ed87dfdfd5adc455d5ba0f84a8b94ae474c7"
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => string(51) "http://localhost/moj-klub/index.php/user/registrate"
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(7) "welcome"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(7) "Welcome"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(7) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
        "authautologin" => string(40) "3d10ed87dfdfd5adc455d5ba0f84a8b94ae474c7"
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (116)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Cookie.php
				
								
					SYSPATH/classes/Kohana/Cookie.php
				
								
					MODPATH/captcha/init.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Welcome.php
				
								
					APPPATH/classes/Controller/Automatic.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					MODPATH/auth/classes/Auth.php
				
								
					MODPATH/auth/classes/Kohana/Auth.php
				
								
					MODPATH/auth/config/auth.php
				
								
					SYSPATH/classes/Session.php
				
								
					SYSPATH/classes/Kohana/Session.php
				
								
					APPPATH/config/auth.php
				
								
					SYSPATH/classes/Config/Group.php
				
								
					SYSPATH/classes/Kohana/Config/Group.php
				
								
					MODPATH/orm/classes/Auth/ORM.php
				
								
					MODPATH/orm/classes/Kohana/Auth/ORM.php
				
								
					SYSPATH/config/session.php
				
								
					MODPATH/database/config/session.php
				
								
					SYSPATH/classes/Session/Native.php
				
								
					SYSPATH/classes/Kohana/Session/Native.php
				
								
					APPPATH/classes/Model/User.php
				
								
					MODPATH/orm/classes/Model/Auth/User.php
				
								
					MODPATH/orm/classes/ORM.php
				
								
					MODPATH/orm/classes/Kohana/ORM.php
				
								
					SYSPATH/classes/Model.php
				
								
					SYSPATH/classes/Kohana/Model.php
				
								
					SYSPATH/classes/Inflector.php
				
								
					SYSPATH/classes/Kohana/Inflector.php
				
								
					SYSPATH/config/inflector.php
				
								
					MODPATH/database/classes/Database.php
				
								
					MODPATH/database/classes/Kohana/Database.php
				
								
					MODPATH/database/config/database.php
				
								
					APPPATH/config/database.php
				
								
					MODPATH/database/classes/Database/MySQL.php
				
								
					MODPATH/database/classes/Kohana/Database/MySQL.php
				
								
					MODPATH/database/classes/Database/MySQL/Result.php
				
								
					MODPATH/database/classes/Kohana/Database/MySQL/Result.php
				
								
					MODPATH/database/classes/Database/Result.php
				
								
					MODPATH/database/classes/Kohana/Database/Result.php
				
								
					MODPATH/database/classes/DB.php
				
								
					MODPATH/database/classes/Kohana/DB.php
				
								
					MODPATH/database/classes/Database/Query/Builder/Select.php
				
								
					MODPATH/database/classes/Kohana/Database/Query/Builder/Select.php
				
								
					MODPATH/database/classes/Database/Query/Builder/Where.php
				
								
					MODPATH/database/classes/Kohana/Database/Query/Builder/Where.php
				
								
					MODPATH/database/classes/Database/Query/Builder.php
				
								
					MODPATH/database/classes/Kohana/Database/Query/Builder.php
				
								
					MODPATH/database/classes/Database/Query.php
				
								
					MODPATH/database/classes/Kohana/Database/Query.php
				
								
					APPPATH/views/Template.php
				
								
					SYSPATH/classes/HTML.php
				
								
					SYSPATH/classes/Kohana/HTML.php
				
								
					SYSPATH/classes/URL.php
				
								
					SYSPATH/classes/Kohana/URL.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
								
					APPPATH/views/Header/Header.php
				
								
					APPPATH/views/Header/Menu/Top.php
				
								
					APPPATH/views/Header/Menu/Main.php
				
								
					APPPATH/views/Header/Access.php
				
								
					APPPATH/i18n/pl/pl.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
							
		
				Loaded extensions (51)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					session
				
								
					posix
				
								
					Reflection
				
								
					standard
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					Phar
				
								
					exif
				
								
					sysvmsg
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					zip
				
								
					apache2handler
				
								
					PDO
				
								
					curl
				
								
					gd
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					imap
				
								
					mcrypt
				
								
					mhash
				
							
		
						$_SESSION
		
			
								
					captcha_response
					string(40) "df96215fb5ba9e217c6afd9d33c64e16f98fee67"
				
								
					last_active
					integer 1373457397
				
								
					auth_user
					object Model_User(34) {
    protected _has_many => array(1) (
        "roles" => array(4) (
            "model" => string(4) "Role"
            "foreign_key" => string(7) "user_id"
            "through" => string(10) "role_users"
            "far_key" => string(7) "role_id"
        )
    )
    protected _has_one => array(1) (
        "info" => array(2) (
            "model" => string(4) "Info"
            "foreign_key" => string(2) "id"
        )
    )
    protected _belongs_to => array(0) 
    protected _load_with => array(0) 
    protected _validation => NULL
    protected _object => array(6) (
        "id" => string(1) "1"
        "email" => string(17) "tomek11@gmail.com"
        "username" => string(7) "tomek11"
        "password" => string(64) "311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da"
        "logins" => string(1) "5"
        "last_login" => string(10) "1373455431"
    )
    protected _changed => array(0) 
    protected _original_values => array(6) (
        "id" => string(1) "1"
        "email" => string(17) "tomek11@gmail.com"
        "username" => string(7) "tomek11"
        "password" => string(64) "311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da"
        "logins" => string(1) "5"
        "last_login" => string(10) "1373455431"
    )
    protected _related => array(0) 
    protected _valid => bool TRUE
    protected _loaded => bool TRUE
    protected _saved => bool TRUE
    protected _sorting => NULL
    protected _foreign_key_suffix => string(3) "_id"
    protected _object_name => string(4) "user"
    protected _object_plural => string(5) "users"
    protected _table_name => string(5) "users"
    protected _table_columns => array(6) (
        "id" => array(13) (
            "type" => string(3) "int"
            "min" => string(1) "0"
            "max" => string(10) "4294967295"
            "column_name" => string(2) "id"
            "column_default" => NULL
            "data_type" => string(12) "int unsigned"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 1
            "display" => string(2) "11"
            "comment" => string(0) ""
            "extra" => string(14) "auto_increment"
            "key" => string(3) "PRI"
            "privileges" => string(20) "select,insert,update"
        )
        "email" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(5) "email"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 2
            "character_maximum_length" => string(3) "254"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(3) "UNI"
            "privileges" => string(20) "select,insert,update"
        )
        "username" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(8) "username"
            "column_default" => string(0) ""
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 3
            "character_maximum_length" => string(2) "32"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(3) "UNI"
            "privileges" => string(20) "select,insert,update"
        )
        "password" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(8) "password"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 4
            "character_maximum_length" => string(2) "64"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(20) "select,insert,update"
        )
        "logins" => array(13) (
            "type" => string(3) "int"
            "min" => string(1) "0"
            "max" => string(10) "4294967295"
            "column_name" => string(6) "logins"
            "column_default" => string(1) "0"
            "data_type" => string(12) "int unsigned"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 5
            "display" => string(2) "10"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(20) "select,insert,update"
        )
        "last_login" => array(13) (
            "type" => string(3) "int"
            "min" => string(1) "0"
            "max" => string(10) "4294967295"
            "column_name" => string(10) "last_login"
            "column_default" => NULL
            "data_type" => string(12) "int unsigned"
            "is_nullable" => bool TRUE
            "ordinal_position" => integer 6
            "display" => string(2) "10"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(20) "select,insert,update"
        )
    )
    protected _updated_column => NULL
    protected _created_column => NULL
    protected _serialize_columns => array(0) 
    protected _primary_key => string(2) "id"
    protected _primary_key_value => string(1) "1"
    protected _table_names_plural => bool TRUE
    protected _reload_on_wakeup => bool TRUE
    protected _db => object Database_MySQL(6) {
        protected _connection_id => string(40) "b9f879390afd9f8af5d5e4967d14d0d5f0d77cce"
        protected _identifier => string(1) "`"
        public last_query => string(240) "SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.&nbsp;&hellip;"
        protected _instance => string(7) "default"
        protected _connection => resource(mysql link persistent)
        protected _config => array(5) (
            "type" => string(5) "MySQL"
            "connection" => array(3) (
                "hostname" => string(9) "localhost"
                "database" => string(7) "my_club"
                "persistent" => bool TRUE
            )
            "table_prefix" => string(0) ""
            "charset" => string(4) "utf8"
            "caching" => bool FALSE
        )
    }
    protected _db_group => NULL
    protected _db_applied => array(0) 
    protected _db_pending => array(0) 
    protected _db_reset => bool TRUE
    protected _db_builder => NULL
    protected _with_applied => array(0) 
    protected _cast_data => array(0) 
    protected _errors_filename => string(4) "user"
}
				
							
		
												$_COOKIE
		
			
								
					__utma
					string(55) "111872281.2137565055.1363209479.1364311035.1372336163.6"
				
								
					__utmz
					string(70) "111872281.1363209479.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)"
				
								
					__utmv
					string(32) "111872281.|1=VisitorType=Guest=1"
				
								
					cookies_info
					string(1) "1"
				
								
					onet_cinfo
					string(1) "1"
				
								
					authautologin
					string(81) "683dff7c4e22a89e5a632d499985a9699aa89f20~3d10ed87dfdfd5adc455d5ba0f84a8b94ae474c7"
				
								
					session
					string(32) "7528f05b94e1458d894be9fbba0c8cf7"
				
							
		
						$_SERVER
		
			
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_USER_AGENT
					string(76) "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(14) "en-US,en;q=0.5"
				
								
					HTTP_ACCEPT_ENCODING
					string(13) "gzip, deflate"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_REFERER
					string(51) "http://localhost/moj-klub/index.php/user/registrate"
				
								
					HTTP_COOKIE
					string(353) "__utma=111872281.2137565055.1363209479.1364311035.1372336163.6; __utmz=111872281.1363209479.1.1.utmcsr=(direct)|utmccn=(direct)|&nbsp;&hellip;"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					PATH
					string(28) "/usr/local/bin:/usr/bin:/bin"
				
								
					SERVER_SIGNATURE
					string(70) "&lt;address&gt;Apache/2.2.22 (Ubuntu) Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(22) "Apache/2.2.22 (Ubuntu)"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(11) "/home/t/www"
				
								
					SERVER_ADMIN
					string(19) "webmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(30) "/home/t/www/moj-klub/index.php"
				
								
					REMOTE_PORT
					string(5) "55804"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(20) "/moj-klub/index.php/"
				
								
					SCRIPT_NAME
					string(19) "/moj-klub/index.php"
				
								
					PATH_INFO
					string(1) "/"
				
								
					PATH_TRANSLATED
					string(12) "/home/t/www/"
				
								
					PHP_SELF
					string(20) "/moj-klub/index.php/"
				
								
					REQUEST_TIME_FLOAT
					float 1373457463,904
				
								
					REQUEST_TIME
					integer 1373457463
				
								
					argv
					array(0) 
				
								
					argc
					integer 0
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-10 13:57:44 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(13): Kohana_View::factory(Object(View))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-10 14:17:01 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /home/t/www/moj-klub/application/classes/Controller/Automatic.php on line 32 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:43
2013-07-10 14:17:01 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/t/www/moj...', 43, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(32): Kohana_Controller->__construct()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:43
2013-07-10 14:18:38 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, none given, called in /home/t/www/moj-klub/application/classes/Controller/Automatic.php on line 32 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:43
2013-07-10 14:18:38 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/t/www/moj...', 43, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(32): Kohana_Controller->__construct()
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/system/classes/Kohana/Controller.php:43
2013-07-10 14:19:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header_menu_access ~ APPPATH/views/Template.php [ 21 ] in /home/t/www/moj-klub/application/views/Template.php:21
2013-07-10 14:19:25 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 21, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(33): Kohana_View::factory(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/application/views/Template.php:21
2013-07-10 14:19:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: header_menu_access ~ APPPATH/views/Template.php [ 21 ] in /home/t/www/moj-klub/application/views/Template.php:21
2013-07-10 14:19:25 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 21, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(33): Kohana_View::factory(Object(View))
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/application/views/Template.php:21
2013-07-10 14:19:25 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
#kohana_error { background: #ddd; font-size: 1em; font-family:sans-serif; text-align: left; color: #111; }
#kohana_error h1,
#kohana_error h2 { margin: 0; padding: 1em; font-size: 1em; font-weight: normal; background: #911; color: #fff; }
	#kohana_error h1 a,
	#kohana_error h2 a { color: #fff; }
#kohana_error h2 { background: #222; }
#kohana_error h3 { margin: 0; padding: 0.4em 0 0; font-size: 1em; font-weight: normal; }
#kohana_error p { margin: 0; padding: 0.2em 0; }
#kohana_error a { color: #1b323b; }
#kohana_error pre { overflow: auto; white-space: pre-wrap; }
#kohana_error table { width: 100%; display: block; margin: 0 0 0.4em; padding: 0; border-collapse: collapse; background: #fff; }
	#kohana_error table td { border: solid 1px #ddd; text-align: left; vertical-align: top; padding: 0.4em; }
#kohana_error div.content { padding: 0.4em 1em 1em; overflow: hidden; }
#kohana_error pre.source { margin: 0 0 1em; padding: 0.4em; background: #fff; border: dotted 1px #b7c680; line-height: 1.2em; }
	#kohana_error pre.source span.line { display: block; }
	#kohana_error pre.source span.highlight { background: #f0eb96; }
		#kohana_error pre.source span.line span.number { color: #666; }
#kohana_error ol.trace { display: block; margin: 0 0 0 2em; padding: 0; list-style: decimal; }
	#kohana_error ol.trace li { margin: 0; padding: 0; }
.js .collapsed { display: none; }


document.documentElement.className = document.documentElement.className + ' js';
function koggle(elem)
{
	elem = document.getElementById(elem);

	if (elem.style && elem.style['display'])
		// Only works with the "style" attr
		var disp = elem.style['display'];
	else if (elem.currentStyle)
		// For MSIE, naturally
		var disp = elem.currentStyle['display'];
	else if (window.getComputedStyle)
		// For most other browsers
		var disp = document.defaultView.getComputedStyle(elem, null).getPropertyValue('display');

	// Toggle the state of the "display" style
	elem.style.display = disp == 'block' ? 'none' : 'block';
	return false;
}


	ErrorException [ Notice ]: Undefined variable: header_menu_access
	
		APPPATH/views/Template.php [ 21 ]
		16 &lt;?php echo View::factory('Header/Header');?&gt;
17 
18 &lt;?php echo $view_container;?&gt;
19 
20 &lt;?php echo View::factory('Footer/Footer');?&gt;
21 &lt;?php echo $header_menu_access;?&gt;
22 	&lt;/body&gt;
23 &lt;/html&gt;		
					
				
					
													APPPATH/views/Template.php [ 21 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(38) "Undefined variable: header_menu_access"
						
											
							2
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
											
							3
							integer 21
						
											
							4
							array(5) (
    "kohana_view_filename" => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    "kohana_view_data" => array(0) 
    "page_title" => string(7) "Welcome"
    "user" => array(6) (
        "id" => string(1) "1"
        "email" => string(17) "tomek11@gmail.com"
        "username" => string(7) "tomek11"
        "password" => string(64) "311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da"
        "logins" => string(1) "6"
        "last_login" => string(10) "1373457528"
    )
    "view_container" => object View(2) {
        protected _file => string(57) "/home/t/www/moj-klub/application/views/Container/Main.php"
        protected _data => array(1) (
            "view" => object View(2) {
                protected _file => string(65) "/home/t/www/moj-klub/application/views/Container/Welcome/Main.php"
                protected _data => array(0) 
            }
        )
    }
)
						
										
				
													16 &lt;?php echo View::factory('Header/Header');?&gt;
17 
18 &lt;?php echo $view_container;?&gt;
19 
20 &lt;?php echo View::factory('Footer/Footer');?&gt;
21 &lt;?php echo $header_menu_access;?&gt;
22 	&lt;/body&gt;
23 &lt;/html&gt;
							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 61 ]
											
					&raquo;
					include(arguments)
				
								
					
											
							0
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
										
				
													56 		ob_start();
57 
58 		try
59 		{
60 			// Load the view within the current scope
61 			include $kohana_view_filename;
62 		}
63 		catch (Exception $e)
64 		{
65 			// Delete the output buffer
66 			ob_end_clean();

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 348 ]
											
					&raquo;
					Kohana_View::capture(arguments)
				
								
					
											
							0
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
											
							1
							array(0) 
						
										
				
													343 		{
344 			throw new View_Exception('You must set the file to use within your view before rendering');
345 		}
346 
347 		// Combine local and global data and capture the output
348 		return View::capture($this-&gt;_file, $this-&gt;_data);
349 	}
350 
351 } // End View

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 228 ]
											
					&raquo;
					Kohana_View->render()
				
													223 	 */
224 	public function __toString()
225 	{
226 		try
227 		{
228 			return $this-&gt;render();
229 		}
230 		catch (Exception $e)
231 		{
232 			/**
233 			 * Display the exception message.

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_View->__toString()
				
											
								
				
					
													SYSPATH/classes/Kohana/I18n.php [ 164 ]
											
					&raquo;
					strtr(arguments)
				
								
					
											
							str
							string(43) "The requested view :file could not be found"
						
											
							from
							array(1) (
    ":file" => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
)
						
										
				
													159 			// The message and target languages are different
160 			// Get the translation for this message
161 			$string = I18n::get($string);
162 		}
163 
164 		return empty($values) ? $string : strtr($string, $values);
165 	}
166 }

							
								
				
					
													SYSPATH/classes/Kohana/Kohana/Exception.php [ 53 ]
											
					&raquo;
					__(arguments)
				
								
					
											
							string
							string(43) "The requested view :file could not be found"
						
											
							values
							array(1) (
    ":file" => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
)
						
										
				
													48 	 * @return  void
49 	 */
50 	public function __construct($message = "", array $variables = NULL, $code = 0, Exception $previous = NULL)
51 	{
52 		// Set the message
53 		$message = __($message, $variables);
54 
55 		// Pass the message and integer code to the parent
56 		parent::__construct($message, (int) $code, $previous);
57 
58 		// Save the unmodified code

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 259 ]
											
					&raquo;
					Kohana_Kohana_Exception->__construct(arguments)
				
								
					
											
							0
							string(43) "The requested view :file could not be found"
						
											
							1
							array(1) (
    ":file" => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
)
						
										
				
													254 	{
255 		if (($path = Kohana::find_file('views', $file)) === FALSE)
256 		{
257 			throw new View_Exception('The requested view :file could not be found', array(
258 				':file' =&gt; $file,
259 			));
260 		}
261 
262 		// Store the file path locally
263 		$this-&gt;_file = $path;
264 

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 137 ]
											
					&raquo;
					Kohana_View->set_filename(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
										
				
													132 	 */
133 	public function __construct($file = NULL, array $data = NULL)
134 	{
135 		if ($file !== NULL)
136 		{
137 			$this-&gt;set_filename($file);
138 		}
139 
140 		if ($data !== NULL)
141 		{
142 			// Add the values to the current data

							
								
				
					
													SYSPATH/classes/Kohana/View.php [ 30 ]
											
					&raquo;
					Kohana_View->__construct(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
											
							1
							NULL
						
										
				
													25 	 * @param   array   $data   array of values
26 	 * @return  View
27 	 */
28 	public static function factory($file = NULL, array $data = NULL)
29 	{
30 		return new View($file, $data);
31 	}
32 
33 	/**
34 	 * Captures the output that is generated when a view is included.
35 	 * The view data will be extracted to make local variables. This method

							
								
				
					
													APPPATH/classes/Controller/Automatic.php [ 33 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
										
				
													28 		{
29 			if(isset($this-&gt;view_container)===FALSE)$this-&gt;view_container=$this-&gt;view_content;
30 			$view_main=View::factory('Container/Main')-&gt;set('view', $this-&gt;view_container);
31 			View::set_global('view_container', $view_main);
32 			$header_menu_access=new Controller_Header_Menu_Access();
33 			$site_view=View::factory($this-&gt;template);
34 			$site_view-&gt;set('header_menu_access',$header_menu_access-&gt;get_menu());
35 		}
36 		parent::after();
37 	}
38 	public $template='Template';

							
								
				
					
													SYSPATH/classes/Kohana/Controller.php [ 87 ]
											
					&raquo;
					Controller_Automatic->after()
				
													82 
83 		// Execute the action itself
84 		$this-&gt;{$action}();
85 
86 		// Execute the "after action" method
87 		$this-&gt;after();
88 
89 		// Return the response
90 		return $this-&gt;response;
91 	}
92 

							
								
				
					
													{PHP internal call}
											
					&raquo;
					Kohana_Controller->execute()
				
											
								
				
					
													SYSPATH/classes/Kohana/Request/Client/Internal.php [ 97 ]
											
					&raquo;
					ReflectionMethod->invoke(arguments)
				
								
					
											
							0
							object Controller_Welcome(8) {
    public template => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
    public page_title => string(7) "Welcome"
    public view_container => object View(2) {
        protected _file => string(65) "/home/t/www/moj-klub/application/views/Container/Welcome/Main.php"
        protected _data => array(0) 
    }
    public view_content => object View(2) {
        protected _file => string(65) "/home/t/www/moj-klub/application/views/Container/Welcome/Main.php"
        protected _data => array(0) 
    }
    public status => NULL
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => string(51) "http://localhost/moj-klub/index.php/user/registrate"
        protected _route => object Route(5) {
            protected _filters => array(0) 
            protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
            protected _regex => array(0) 
            protected _defaults => array(2) (
                "controller" => string(7) "welcome"
                "action" => string(5) "index"
            )
            protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
        }
        protected _routes => array(0) 
        protected _header => object HTTP_Header(0) {
        }
        protected _body => NULL
        protected _directory => string(0) ""
        protected _controller => string(7) "Welcome"
        protected _action => string(5) "index"
        protected _uri => string(0) ""
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(7) (
            "__utma" => NULL
            "__utmz" => NULL
            "__utmv" => NULL
            "cookies_info" => NULL
            "onet_cinfo" => NULL
            "authautologin" => string(40) "c949abdd6811b92738b4d165427920befd8a77ab"
            "session" => NULL
        )
        protected _client => object Request_Client_Internal(9) {
            protected _previous_environment => NULL
            protected _cache => NULL
            protected _follow => bool FALSE
            protected _follow_headers => array(1) (
                0 => string(13) "Authorization"
            )
            protected _strict_redirect => bool TRUE
            protected _header_callbacks => array(1) (
                "Location" => string(34) "Request_Client::on_header_location"
            )
            protected _max_callback_depth => integer 5
            protected _callback_depth => integer 1
            protected _callback_params => array(0) 
        }
    }
    public response => object Response(5) {
        protected _status => integer 200
        protected _header => object HTTP_Header(0) {
        }
        protected _body => string(0) ""
        protected _cookies => array(0) 
        protected _protocol => NULL
    }
}
						
										
				
													 92 
 93 			// Create a new instance of the controller
 94 			$controller = $class-&gt;newInstance($request, $response);
 95 
 96 			// Run the controller's execute() method
 97 			$response = $class-&gt;getMethod('execute')-&gt;invoke($controller);
 98 
 99 			if ( ! $response instanceof Response)
100 			{
101 				// Controller failed to return a Response.
102 				throw new Kohana_Exception('Controller failed to return a Response');

							
								
				
					
													SYSPATH/classes/Kohana/Request/Client.php [ 114 ]
											
					&raquo;
					Kohana_Request_Client_Internal->execute_request(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => string(51) "http://localhost/moj-klub/index.php/user/registrate"
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(7) "welcome"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(7) "Welcome"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(7) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
        "authautologin" => string(40) "c949abdd6811b92738b4d165427920befd8a77ab"
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
											
							1
							object Response(5) {
    protected _status => integer 200
    protected _header => object HTTP_Header(0) {
    }
    protected _body => string(0) ""
    protected _cookies => array(0) 
    protected _protocol => NULL
}
						
										
				
													109 		$orig_response = $response = Response::factory();
110 
111 		if (($cache = $this-&gt;cache()) instanceof HTTP_Cache)
112 			return $cache-&gt;execute($this, $request, $response);
113 
114 		$response = $this-&gt;execute_request($request, $response);
115 
116 		// Execute response callbacks
117 		foreach ($this-&gt;header_callbacks() as $header =&gt; $callback)
118 		{
119 			if ($response-&gt;headers($header))

							
								
				
					
													SYSPATH/classes/Kohana/Request.php [ 990 ]
											
					&raquo;
					Kohana_Request_Client->execute(arguments)
				
								
					
											
							0
							object Request(19) {
    protected _requested_with => NULL
    protected _method => string(3) "GET"
    protected _protocol => string(8) "HTTP/1.1"
    protected _secure => bool FALSE
    protected _referrer => string(51) "http://localhost/moj-klub/index.php/user/registrate"
    protected _route => object Route(5) {
        protected _filters => array(0) 
        protected _uri => string(32) "(&lt;controller&gt;(/&lt;action&gt;(/&lt;id&gt;)))"
        protected _regex => array(0) 
        protected _defaults => array(2) (
            "controller" => string(7) "welcome"
            "action" => string(5) "index"
        )
        protected _route_regex => string(95) "#^(?:(?P&lt;controller&gt;[^/.,;?\n]++)(?:/(?P&lt;action&gt;[^/.,;?\n]++)(?:/(?P&lt;id&gt;[^/.,;?\n]++))?)?)?$#uD"
    }
    protected _routes => array(0) 
    protected _header => object HTTP_Header(0) {
    }
    protected _body => NULL
    protected _directory => string(0) ""
    protected _controller => string(7) "Welcome"
    protected _action => string(5) "index"
    protected _uri => string(0) ""
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(7) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
        "authautologin" => string(40) "c949abdd6811b92738b4d165427920befd8a77ab"
        "session" => NULL
    )
    protected _client => object Request_Client_Internal(9) {
        protected _previous_environment => NULL
        protected _cache => NULL
        protected _follow => bool FALSE
        protected _follow_headers => array(1) (
            0 => string(13) "Authorization"
        )
        protected _strict_redirect => bool TRUE
        protected _header_callbacks => array(1) (
            "Location" => string(34) "Request_Client::on_header_location"
        )
        protected _max_callback_depth => integer 5
        protected _callback_depth => integer 1
        protected _callback_params => array(0) 
    }
}
						
										
				
													985 			throw new Request_Exception('Unable to execute :uri without a Kohana_Request_Client', array(
986 				':uri' =&gt; $this-&gt;_uri,
987 			));
988 		}
989 
990 		return $this-&gt;_client-&gt;execute($this);
991 	}
992 
993 	/**
994 	 * Returns whether this request is the initial request Kohana received.
995 	 * Can be used to test for sub requests.

							
								
				
					
													DOCROOT/index.php [ 118 ]
											
					&raquo;
					Kohana_Request->execute()
				
													113 	/**
114 	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
115 	 * If no source is specified, the URI will be automatically detected.
116 	 */
117 	echo Request::factory(TRUE, array(), FALSE)
118 		-&gt;execute()
119 		-&gt;send_headers(TRUE)
120 		-&gt;body();
121 }

							
							
	
	Environment
	
				Included files (128)
		
			
								
					DOCROOT/index.php
				
								
					APPPATH/bootstrap.php
				
								
					SYSPATH/classes/Kohana/Core.php
				
								
					SYSPATH/classes/Kohana.php
				
								
					SYSPATH/classes/I18n.php
				
								
					SYSPATH/classes/Kohana/I18n.php
				
								
					SYSPATH/classes/Kohana/Exception.php
				
								
					SYSPATH/classes/Kohana/Kohana/Exception.php
				
								
					SYSPATH/classes/Log.php
				
								
					SYSPATH/classes/Kohana/Log.php
				
								
					SYSPATH/classes/Config.php
				
								
					SYSPATH/classes/Kohana/Config.php
				
								
					SYSPATH/classes/Log/File.php
				
								
					SYSPATH/classes/Kohana/Log/File.php
				
								
					SYSPATH/classes/Log/Writer.php
				
								
					SYSPATH/classes/Kohana/Log/Writer.php
				
								
					SYSPATH/classes/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File.php
				
								
					SYSPATH/classes/Kohana/Config/File/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Reader.php
				
								
					SYSPATH/classes/Kohana/Config/Source.php
				
								
					SYSPATH/classes/Cookie.php
				
								
					SYSPATH/classes/Kohana/Cookie.php
				
								
					MODPATH/captcha/init.php
				
								
					SYSPATH/classes/Route.php
				
								
					SYSPATH/classes/Kohana/Route.php
				
								
					SYSPATH/classes/Request.php
				
								
					SYSPATH/classes/Kohana/Request.php
				
								
					SYSPATH/classes/HTTP/Request.php
				
								
					SYSPATH/classes/Kohana/HTTP/Request.php
				
								
					SYSPATH/classes/HTTP/Message.php
				
								
					SYSPATH/classes/Kohana/HTTP/Message.php
				
								
					SYSPATH/classes/HTTP/Header.php
				
								
					SYSPATH/classes/Kohana/HTTP/Header.php
				
								
					SYSPATH/classes/Request/Client/Internal.php
				
								
					SYSPATH/classes/Kohana/Request/Client/Internal.php
				
								
					SYSPATH/classes/Request/Client.php
				
								
					SYSPATH/classes/Kohana/Request/Client.php
				
								
					SYSPATH/classes/Arr.php
				
								
					SYSPATH/classes/Kohana/Arr.php
				
								
					SYSPATH/classes/Response.php
				
								
					SYSPATH/classes/Kohana/Response.php
				
								
					SYSPATH/classes/HTTP/Response.php
				
								
					SYSPATH/classes/Kohana/HTTP/Response.php
				
								
					SYSPATH/classes/Profiler.php
				
								
					SYSPATH/classes/Kohana/Profiler.php
				
								
					APPPATH/classes/Controller/Welcome.php
				
								
					APPPATH/classes/Controller/Automatic.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					MODPATH/auth/classes/Auth.php
				
								
					MODPATH/auth/classes/Kohana/Auth.php
				
								
					MODPATH/auth/config/auth.php
				
								
					SYSPATH/classes/Session.php
				
								
					SYSPATH/classes/Kohana/Session.php
				
								
					APPPATH/config/auth.php
				
								
					SYSPATH/classes/Config/Group.php
				
								
					SYSPATH/classes/Kohana/Config/Group.php
				
								
					MODPATH/orm/classes/Auth/ORM.php
				
								
					MODPATH/orm/classes/Kohana/Auth/ORM.php
				
								
					SYSPATH/config/session.php
				
								
					MODPATH/database/config/session.php
				
								
					SYSPATH/classes/Session/Native.php
				
								
					SYSPATH/classes/Kohana/Session/Native.php
				
								
					APPPATH/classes/Model/User.php
				
								
					MODPATH/orm/classes/Model/Auth/User.php
				
								
					MODPATH/orm/classes/ORM.php
				
								
					MODPATH/orm/classes/Kohana/ORM.php
				
								
					SYSPATH/classes/Model.php
				
								
					SYSPATH/classes/Kohana/Model.php
				
								
					SYSPATH/classes/Inflector.php
				
								
					SYSPATH/classes/Kohana/Inflector.php
				
								
					SYSPATH/config/inflector.php
				
								
					MODPATH/database/classes/Database.php
				
								
					MODPATH/database/classes/Kohana/Database.php
				
								
					MODPATH/database/config/database.php
				
								
					APPPATH/config/database.php
				
								
					MODPATH/database/classes/Database/MySQL.php
				
								
					MODPATH/database/classes/Kohana/Database/MySQL.php
				
								
					MODPATH/database/classes/Database/MySQL/Result.php
				
								
					MODPATH/database/classes/Kohana/Database/MySQL/Result.php
				
								
					MODPATH/database/classes/Database/Result.php
				
								
					MODPATH/database/classes/Kohana/Database/Result.php
				
								
					MODPATH/database/classes/DB.php
				
								
					MODPATH/database/classes/Kohana/DB.php
				
								
					MODPATH/database/classes/Database/Query/Builder/Select.php
				
								
					MODPATH/database/classes/Kohana/Database/Query/Builder/Select.php
				
								
					MODPATH/database/classes/Database/Query/Builder/Where.php
				
								
					MODPATH/database/classes/Kohana/Database/Query/Builder/Where.php
				
								
					MODPATH/database/classes/Database/Query/Builder.php
				
								
					MODPATH/database/classes/Kohana/Database/Query/Builder.php
				
								
					MODPATH/database/classes/Database/Query.php
				
								
					MODPATH/database/classes/Kohana/Database/Query.php
				
								
					APPPATH/classes/Controller/Header/Menu/Access.php
				
								
					APPPATH/views/Template.php
				
								
					SYSPATH/classes/HTML.php
				
								
					SYSPATH/classes/Kohana/HTML.php
				
								
					SYSPATH/classes/URL.php
				
								
					SYSPATH/classes/Kohana/URL.php
				
								
					SYSPATH/classes/UTF8.php
				
								
					SYSPATH/classes/Kohana/UTF8.php
				
								
					APPPATH/views/Header/Header.php
				
								
					APPPATH/views/Header/Menu/Top.php
				
								
					APPPATH/views/Header/Menu/Main.php
				
								
					APPPATH/views/Header/Access.php
				
								
					APPPATH/i18n/pl/pl.php
				
								
					APPPATH/views/Container/Main.php
				
								
					APPPATH/views/Container/Welcome/Main.php
				
								
					APPPATH/views/Component/Carousel.php
				
								
					APPPATH/views/Component/Access/Quick.php
				
								
					APPPATH/views/Component/Form/Login.php
				
								
					SYSPATH/classes/Form.php
				
								
					SYSPATH/classes/Kohana/Form.php
				
								
					APPPATH/views/Component/Thumbnails/Team.php
				
								
					APPPATH/views/Component/Thumbnails/Thumbnail/Team.php
				
								
					APPPATH/views/Component/Window/Modal/Main.php
				
								
					APPPATH/views/Footer/Footer.php
				
								
					SYSPATH/classes/Debug.php
				
								
					SYSPATH/classes/Kohana/Debug.php
				
								
					SYSPATH/classes/Date.php
				
								
					SYSPATH/classes/Kohana/Date.php
				
								
					SYSPATH/views/kohana/error.php
				
								
					SYSPATH/classes/View/Exception.php
				
								
					SYSPATH/classes/Kohana/View/Exception.php
				
							
		
				Loaded extensions (51)
		
			
								
					Core
				
								
					date
				
								
					ereg
				
								
					libxml
				
								
					openssl
				
								
					pcre
				
								
					zlib
				
								
					bcmath
				
								
					bz2
				
								
					calendar
				
								
					ctype
				
								
					dba
				
								
					dom
				
								
					hash
				
								
					fileinfo
				
								
					filter
				
								
					ftp
				
								
					gettext
				
								
					SPL
				
								
					iconv
				
								
					json
				
								
					mbstring
				
								
					session
				
								
					posix
				
								
					Reflection
				
								
					standard
				
								
					shmop
				
								
					SimpleXML
				
								
					soap
				
								
					sockets
				
								
					Phar
				
								
					exif
				
								
					sysvmsg
				
								
					sysvsem
				
								
					sysvshm
				
								
					tokenizer
				
								
					wddx
				
								
					xml
				
								
					xmlreader
				
								
					xmlwriter
				
								
					zip
				
								
					apache2handler
				
								
					PDO
				
								
					curl
				
								
					gd
				
								
					mysql
				
								
					mysqli
				
								
					pdo_mysql
				
								
					imap
				
								
					mcrypt
				
								
					mhash
				
							
		
						$_SESSION
		
			
								
					captcha_response
					string(40) "df96215fb5ba9e217c6afd9d33c64e16f98fee67"
				
								
					last_active
					integer 1373458718
				
								
					auth_user
					object Model_User(34) {
    protected _has_many => array(1) (
        "roles" => array(4) (
            "model" => string(4) "Role"
            "foreign_key" => string(7) "user_id"
            "through" => string(10) "role_users"
            "far_key" => string(7) "role_id"
        )
    )
    protected _has_one => array(1) (
        "info" => array(2) (
            "model" => string(4) "Info"
            "foreign_key" => string(2) "id"
        )
    )
    protected _belongs_to => array(0) 
    protected _load_with => array(0) 
    protected _validation => NULL
    protected _object => array(6) (
        "id" => string(1) "1"
        "email" => string(17) "tomek11@gmail.com"
        "username" => string(7) "tomek11"
        "password" => string(64) "311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da"
        "logins" => string(1) "6"
        "last_login" => string(10) "1373457528"
    )
    protected _changed => array(0) 
    protected _original_values => array(6) (
        "id" => string(1) "1"
        "email" => string(17) "tomek11@gmail.com"
        "username" => string(7) "tomek11"
        "password" => string(64) "311e19286e457334ef7cde3a4df758f1bb0a995d15bcc6c01d8bba0e104a55da"
        "logins" => string(1) "6"
        "last_login" => string(10) "1373457528"
    )
    protected _related => array(0) 
    protected _valid => bool TRUE
    protected _loaded => bool TRUE
    protected _saved => bool TRUE
    protected _sorting => NULL
    protected _foreign_key_suffix => string(3) "_id"
    protected _object_name => string(4) "user"
    protected _object_plural => string(5) "users"
    protected _table_name => string(5) "users"
    protected _table_columns => array(6) (
        "id" => array(13) (
            "type" => string(3) "int"
            "min" => string(1) "0"
            "max" => string(10) "4294967295"
            "column_name" => string(2) "id"
            "column_default" => NULL
            "data_type" => string(12) "int unsigned"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 1
            "display" => string(2) "11"
            "comment" => string(0) ""
            "extra" => string(14) "auto_increment"
            "key" => string(3) "PRI"
            "privileges" => string(20) "select,insert,update"
        )
        "email" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(5) "email"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 2
            "character_maximum_length" => string(3) "254"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(3) "UNI"
            "privileges" => string(20) "select,insert,update"
        )
        "username" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(8) "username"
            "column_default" => string(0) ""
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 3
            "character_maximum_length" => string(2) "32"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(3) "UNI"
            "privileges" => string(20) "select,insert,update"
        )
        "password" => array(12) (
            "type" => string(6) "string"
            "column_name" => string(8) "password"
            "column_default" => NULL
            "data_type" => string(7) "varchar"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 4
            "character_maximum_length" => string(2) "64"
            "collation_name" => string(15) "utf8_general_ci"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(20) "select,insert,update"
        )
        "logins" => array(13) (
            "type" => string(3) "int"
            "min" => string(1) "0"
            "max" => string(10) "4294967295"
            "column_name" => string(6) "logins"
            "column_default" => string(1) "0"
            "data_type" => string(12) "int unsigned"
            "is_nullable" => bool FALSE
            "ordinal_position" => integer 5
            "display" => string(2) "10"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(20) "select,insert,update"
        )
        "last_login" => array(13) (
            "type" => string(3) "int"
            "min" => string(1) "0"
            "max" => string(10) "4294967295"
            "column_name" => string(10) "last_login"
            "column_default" => NULL
            "data_type" => string(12) "int unsigned"
            "is_nullable" => bool TRUE
            "ordinal_position" => integer 6
            "display" => string(2) "10"
            "comment" => string(0) ""
            "extra" => string(0) ""
            "key" => string(0) ""
            "privileges" => string(20) "select,insert,update"
        )
    )
    protected _updated_column => NULL
    protected _created_column => NULL
    protected _serialize_columns => array(0) 
    protected _primary_key => string(2) "id"
    protected _primary_key_value => string(1) "1"
    protected _table_names_plural => bool TRUE
    protected _reload_on_wakeup => bool TRUE
    protected _db => object Database_MySQL(6) {
        protected _connection_id => string(40) "b9f879390afd9f8af5d5e4967d14d0d5f0d77cce"
        protected _identifier => string(1) "`"
        public last_query => string(240) "SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.&nbsp;&hellip;"
        protected _instance => string(7) "default"
        protected _connection => resource(mysql link persistent)
        protected _config => array(5) (
            "type" => string(5) "MySQL"
            "connection" => array(3) (
                "hostname" => string(9) "localhost"
                "database" => string(7) "my_club"
                "persistent" => bool TRUE
            )
            "table_prefix" => string(0) ""
            "charset" => string(4) "utf8"
            "caching" => bool FALSE
        )
    }
    protected _db_group => NULL
    protected _db_applied => array(0) 
    protected _db_pending => array(0) 
    protected _db_reset => bool TRUE
    protected _db_builder => NULL
    protected _with_applied => array(0) 
    protected _cast_data => array(0) 
    protected _errors_filename => string(4) "user"
}
				
							
		
												$_COOKIE
		
			
								
					__utma
					string(55) "111872281.2137565055.1363209479.1364311035.1372336163.6"
				
								
					__utmz
					string(70) "111872281.1363209479.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)"
				
								
					__utmv
					string(32) "111872281.|1=VisitorType=Guest=1"
				
								
					cookies_info
					string(1) "1"
				
								
					onet_cinfo
					string(1) "1"
				
								
					authautologin
					string(81) "a6de500418d4d888ce5d8673c1ee9cdd162a090a~c949abdd6811b92738b4d165427920befd8a77ab"
				
								
					session
					string(32) "e67b40549854e4143884844f22279bf7"
				
							
		
						$_SERVER
		
			
								
					HTTP_HOST
					string(9) "localhost"
				
								
					HTTP_USER_AGENT
					string(76) "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0"
				
								
					HTTP_ACCEPT
					string(63) "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8"
				
								
					HTTP_ACCEPT_LANGUAGE
					string(14) "en-US,en;q=0.5"
				
								
					HTTP_ACCEPT_ENCODING
					string(13) "gzip, deflate"
				
								
					HTTP_DNT
					string(1) "1"
				
								
					HTTP_REFERER
					string(51) "http://localhost/moj-klub/index.php/user/registrate"
				
								
					HTTP_COOKIE
					string(353) "__utma=111872281.2137565055.1363209479.1364311035.1372336163.6; __utmz=111872281.1363209479.1.1.utmcsr=(direct)|utmccn=(direct)|&nbsp;&hellip;"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
					HTTP_CACHE_CONTROL
					string(9) "max-age=0"
				
								
					PATH
					string(28) "/usr/local/bin:/usr/bin:/bin"
				
								
					SERVER_SIGNATURE
					string(70) "&lt;address&gt;Apache/2.2.22 (Ubuntu) Server at localhost Port 80&lt;/address&gt;
"
				
								
					SERVER_SOFTWARE
					string(22) "Apache/2.2.22 (Ubuntu)"
				
								
					SERVER_NAME
					string(9) "localhost"
				
								
					SERVER_ADDR
					string(9) "127.0.0.1"
				
								
					SERVER_PORT
					string(2) "80"
				
								
					REMOTE_ADDR
					string(9) "127.0.0.1"
				
								
					DOCUMENT_ROOT
					string(11) "/home/t/www"
				
								
					SERVER_ADMIN
					string(19) "webmaster@localhost"
				
								
					SCRIPT_FILENAME
					string(30) "/home/t/www/moj-klub/index.php"
				
								
					REMOTE_PORT
					string(5) "55875"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(20) "/moj-klub/index.php/"
				
								
					SCRIPT_NAME
					string(19) "/moj-klub/index.php"
				
								
					PATH_INFO
					string(1) "/"
				
								
					PATH_TRANSLATED
					string(12) "/home/t/www/"
				
								
					PHP_SELF
					string(20) "/moj-klub/index.php/"
				
								
					REQUEST_TIME_FLOAT
					float 1373458765,028
				
								
					REQUEST_TIME
					integer 1373458765
				
								
					argv
					array(0) 
				
								
					argc
					integer 0
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-10 14:19:25 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(33): Kohana_View::factory(Object(View))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-10 14:42:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/Header/Loged.php [ 5 ] in /home/t/www/moj-klub/application/views/Header/Loged.php:5
2013-07-10 14:42:42 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Header/Loged.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 5, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Header/Menu/Top.php(27): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Header/Header.php(4): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#16 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(35): Kohana_Controller_Template->after()
#17 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#18 [internal function]: Kohana_Controller->execute()
#19 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#20 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#22 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#23 {main} in /home/t/www/moj-klub/application/views/Header/Loged.php:5
2013-07-10 15:51:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: role ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-10 15:51:06 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(35): Kohana_Controller_Template->after()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-10 15:51:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-10 15:51:43 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('role')
#1 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_ORM->__get('role')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-10 15:54:12 --- EMERGENCY: Kohana_Exception [ 0 ]: The role_id property does not exist in the Model_Role class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-10 15:54:12 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('role_id')
#1 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_ORM->__get('role_id')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-10 15:54:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The roles_id property does not exist in the Model_Role class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-10 15:54:21 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('roles_id')
#1 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_ORM->__get('roles_id')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:600
2013-07-10 15:58:24 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH/classes/Controller/Automatic.php [ 11 ] in :
2013-07-10 15:58:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-10 16:05:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Automatic.php [ 11 ] in /home/t/www/moj-klub/application/classes/Controller/Automatic.php:11
2013-07-10 16:05:43 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 11, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Automatic.php:11
2013-07-10 16:14:57 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Controller/Automatic.php [ 16 ] in :
2013-07-10 16:14:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(16): implode(',', '2')
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-10 16:15:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH/classes/Controller/Automatic.php [ 16 ] in /home/t/www/moj-klub/application/classes/Controller/Automatic.php:16
2013-07-10 16:15:12 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Automatic.php:16
2013-07-10 16:15:26 --- EMERGENCY: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH/classes/Controller/Automatic.php [ 16 ] in :
2013-07-10 16:15:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(16): implode(',', Object(Database_MySQL_Result))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-10 16:15:53 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find() ~ APPPATH/classes/Controller/Automatic.php [ 16 ] in :
2013-07-10 16:15:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-10 16:43:15 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-10 16:43:15 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(9): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-10 20:51:50 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-10 20:51:50 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(9): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-10 21:22:37 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 19 ] in :
2013-07-10 21:22:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-10 21:25:53 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH/classes/Controller/User.php [ 62 ] in :
2013-07-10 21:25:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-10 21:34:33 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-10 21:34:33 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(9): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-10 21:34:57 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-10 21:34:57 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(9): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-10 21:46:33 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-10 21:46:33 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(9): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(69): Controller_Automatic->before()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125