<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-05 01:11:52 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-05 01:11:52 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/captcha/classes/Captcha.php(161): Kohana_Session::instance()
#3 /home/t/www/moj-klub/modules/captcha/classes/Controller/Captcha.php(38): Captcha->update_response_session()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Captcha->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Captcha))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-05 10:16:26 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 16 ] in :
2013-07-05 10:16:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-05 10:16:46 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ APPPATH/classes/Controller/Automatic.php [ 16 ] in :
2013-07-05 10:16:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-05 10:20:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:20:31 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:20:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:20:31 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:20:31 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
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
	
		APPPATH/views/Template.php [ 16 ]
		11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;		
					
				
					
													APPPATH/views/Template.php [ 16 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(34) "Undefined variable: view_container"
						
											
							2
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
											
							3
							integer 16
						
											
							4
							array(3) (
    "kohana_view_filename" => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    "kohana_view_data" => array(0) 
    "page_title" => string(4) "User"
)
						
										
				
													11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;
							
								
				
					
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

							
								
				
					
													APPPATH/classes/Controller/Automatic.php [ 22 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
										
				
													17 			echo $output;
18 		}
19 		else
20 		{
21 			$view_container=View::factory('Container/Main')-&gt;set('view', $this-&gt;view_content);
22 			View::factory($this-&gt;template)-&gt;set('view_container', $view_ontainer);
23 		}
24 		parent::after();
25 	}
26 	public $template='Template';
27 	public $page_title;

							
								
				
					
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
							object Controller_User(8) {
    protected error => NULL
    public template => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
    public page_title => string(4) "User"
    public view_container => NULL
    public view_content => object View(2) {
        protected _file => string(70) "/home/t/www/moj-klub/application/views/Component/Access/Registrate.php"
        protected _data => array(3) (
            "user" => array(6) (
                "id" => NULL
                "email" => NULL
                "username" => NULL
                "password" => NULL
                "logins" => NULL
                "last_login" => NULL
            )
            "info" => array(6) (
                "id" => NULL
                "name" => NULL
                "surname" => NULL
                "phone" => NULL
                "show_phone" => NULL
                "show_email" => NULL
            )
            "error" => NULL
        )
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => string(36) "http://localhost/moj-klub/index.php/"
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
        protected _controller => string(4) "User"
        protected _action => string(10) "registrate"
        protected _uri => string(15) "user/registrate"
        protected _external => bool FALSE
        protected _params => array(0) 
        protected _get => array(0) 
        protected _post => array(0) 
        protected _cookies => array(6) (
            "__utma" => NULL
            "__utmz" => NULL
            "__utmv" => NULL
            "cookies_info" => NULL
            "onet_cinfo" => NULL
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
    protected _referrer => string(36) "http://localhost/moj-klub/index.php/"
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
    protected _controller => string(4) "User"
    protected _action => string(10) "registrate"
    protected _uri => string(15) "user/registrate"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
    protected _referrer => string(36) "http://localhost/moj-klub/index.php/"
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
    protected _controller => string(4) "User"
    protected _action => string(10) "registrate"
    protected _uri => string(15) "user/registrate"
    protected _external => bool FALSE
    protected _params => array(0) 
    protected _get => array(0) 
    protected _post => array(0) 
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
	
				Included files (95)
		
			
								
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
				
								
					APPPATH/classes/Controller/User.php
				
								
					APPPATH/classes/Controller/Automatic.php
				
								
					SYSPATH/classes/Controller/Template.php
				
								
					SYSPATH/classes/Kohana/Controller/Template.php
				
								
					SYSPATH/classes/Controller.php
				
								
					SYSPATH/classes/Kohana/Controller.php
				
								
					SYSPATH/classes/View.php
				
								
					SYSPATH/classes/Kohana/View.php
				
								
					MODPATH/orm/classes/ORM.php
				
								
					MODPATH/orm/classes/Kohana/ORM.php
				
								
					SYSPATH/classes/Model.php
				
								
					SYSPATH/classes/Kohana/Model.php
				
								
					APPPATH/classes/Model/User.php
				
								
					MODPATH/orm/classes/Model/Auth/User.php
				
								
					SYSPATH/classes/Inflector.php
				
								
					SYSPATH/classes/Kohana/Inflector.php
				
								
					SYSPATH/config/inflector.php
				
								
					SYSPATH/classes/Config/Group.php
				
								
					SYSPATH/classes/Kohana/Config/Group.php
				
								
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
				
								
					APPPATH/classes/Model/Info.php
				
								
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
				
								
					session
					string(32) "8d82e77768e8759ef8512c6fcb5617dd"
				
							
		
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
					string(36) "http://localhost/moj-klub/index.php/"
				
								
					HTTP_COOKIE
					string(254) "__utma=111872281.2137565055.1363209479.1364311035.1372336163.6; __utmz=111872281.1363209479.1.1.utmcsr=(direct)|utmccn=(direct)|&nbsp;&hellip;"
				
								
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
					string(5) "42198"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(35) "/moj-klub/index.php/user/registrate"
				
								
					SCRIPT_NAME
					string(19) "/moj-klub/index.php"
				
								
					PATH_INFO
					string(16) "/user/registrate"
				
								
					PATH_TRANSLATED
					string(27) "/home/t/www/user/registrate"
				
								
					PHP_SELF
					string(35) "/moj-klub/index.php/user/registrate"
				
								
					REQUEST_TIME_FLOAT
					float 1373012431,53
				
								
					REQUEST_TIME
					integer 1373012431
				
								
					argv
					array(0) 
				
								
					argc
					integer 0
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:20:31 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:20:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:20:45 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:20:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:20:45 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:20:45 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
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
	
		APPPATH/views/Template.php [ 16 ]
		11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;		
					
				
					
													APPPATH/views/Template.php [ 16 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(34) "Undefined variable: view_container"
						
											
							2
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
											
							3
							integer 16
						
											
							4
							array(3) (
    "kohana_view_filename" => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    "kohana_view_data" => array(0) 
    "page_title" => string(7) "Welcome"
)
						
										
				
													11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;
							
								
				
					
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

							
								
				
					
													APPPATH/classes/Controller/Automatic.php [ 22 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
										
				
													17 			echo $output;
18 		}
19 		else
20 		{
21 			$view_container=View::factory('Container/Main')-&gt;set('view', $this-&gt;view_content);
22 			View::factory($this-&gt;template)-&gt;set('view_container', $view_ontainer);
23 		}
24 		parent::after();
25 	}
26 	public $template='Template';
27 	public $page_title;

							
								
				
					
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
							object Controller_Welcome(7) {
    public template => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
    public page_title => string(7) "Welcome"
    public view_container => NULL
    public view_content => object View(2) {
        protected _file => string(65) "/home/t/www/moj-klub/application/views/Container/Welcome/Main.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
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
        protected _cookies => array(6) (
            "__utma" => NULL
            "__utmz" => NULL
            "__utmv" => NULL
            "cookies_info" => NULL
            "onet_cinfo" => NULL
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
    protected _referrer => NULL
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
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
    protected _referrer => NULL
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
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
	
				Included files (73)
		
			
								
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
				
								
					session
					string(32) "8d82e77768e8759ef8512c6fcb5617dd"
				
							
		
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
				
								
					HTTP_COOKIE
					string(254) "__utma=111872281.2137565055.1363209479.1364311035.1372336163.6; __utmz=111872281.1363209479.1.1.utmcsr=(direct)|utmccn=(direct)|&nbsp;&hellip;"
				
								
					HTTP_CONNECTION
					string(10) "keep-alive"
				
								
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
					string(5) "42199"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(10) "/moj-klub/"
				
								
					SCRIPT_NAME
					string(19) "/moj-klub/index.php"
				
								
					PHP_SELF
					string(19) "/moj-klub/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1373012445,209
				
								
					REQUEST_TIME
					integer 1373012445
				
								
					argv
					array(0) 
				
								
					argc
					integer 0
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:20:45 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:23:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:23:06 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:23:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:23:06 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:23:06 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
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
	
		APPPATH/views/Template.php [ 16 ]
		11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;		
					
				
					
													APPPATH/views/Template.php [ 16 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(34) "Undefined variable: view_container"
						
											
							2
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
											
							3
							integer 16
						
											
							4
							array(3) (
    "kohana_view_filename" => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    "kohana_view_data" => array(0) 
    "page_title" => string(7) "Welcome"
)
						
										
				
													11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;
							
								
				
					
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

							
								
				
					
													APPPATH/classes/Controller/Automatic.php [ 22 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
										
				
													17 			echo $output;
18 		}
19 		else
20 		{
21 			$view_container=View::factory('Container/Main')-&gt;set('view', $this-&gt;view_content);
22 			View::factory($this-&gt;template)-&gt;set('view_container', $view_container);
23 		}
24 		parent::after();
25 	}
26 	public $template='Template';
27 	public $page_title;

							
								
				
					
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
							object Controller_Welcome(7) {
    public template => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
    public page_title => string(7) "Welcome"
    public view_container => NULL
    public view_content => object View(2) {
        protected _file => string(65) "/home/t/www/moj-klub/application/views/Container/Welcome/Main.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
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
        protected _cookies => array(6) (
            "__utma" => NULL
            "__utmz" => NULL
            "__utmv" => NULL
            "cookies_info" => NULL
            "onet_cinfo" => NULL
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
    protected _referrer => NULL
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
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
    protected _referrer => NULL
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
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
	
				Included files (73)
		
			
								
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
				
								
					session
					string(32) "8d82e77768e8759ef8512c6fcb5617dd"
				
							
		
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
				
								
					HTTP_COOKIE
					string(254) "__utma=111872281.2137565055.1363209479.1364311035.1372336163.6; __utmz=111872281.1363209479.1.1.utmcsr=(direct)|utmccn=(direct)|&nbsp;&hellip;"
				
								
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
					string(5) "42200"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(10) "/moj-klub/"
				
								
					SCRIPT_NAME
					string(19) "/moj-klub/index.php"
				
								
					PHP_SELF
					string(19) "/moj-klub/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1373012586,746
				
								
					REQUEST_TIME
					integer 1373012586
				
								
					argv
					array(0) 
				
								
					argc
					integer 0
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:23:06 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:23:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:23:17 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:23:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:23:17 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:23:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
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
	
		APPPATH/views/Template.php [ 16 ]
		11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;		
					
				
					
													APPPATH/views/Template.php [ 16 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(34) "Undefined variable: view_container"
						
											
							2
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
											
							3
							integer 16
						
											
							4
							array(3) (
    "kohana_view_filename" => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    "kohana_view_data" => array(0) 
    "page_title" => string(7) "Welcome"
)
						
										
				
													11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;
							
								
				
					
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

							
								
				
					
													APPPATH/classes/Controller/Automatic.php [ 22 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
										
				
													17 		//	echo $output;
18 		}
19 		else
20 		{
21 			$view_container=View::factory('Container/Main')-&gt;set('view', $this-&gt;view_content);
22 			View::factory($this-&gt;template)-&gt;set('view_container', $view_container);
23 		}
24 		parent::after();
25 	}
26 	public $template='Template';
27 	public $page_title;

							
								
				
					
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
							object Controller_Welcome(7) {
    public template => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
    public page_title => string(7) "Welcome"
    public view_container => NULL
    public view_content => object View(2) {
        protected _file => string(65) "/home/t/www/moj-klub/application/views/Container/Welcome/Main.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
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
        protected _cookies => array(6) (
            "__utma" => NULL
            "__utmz" => NULL
            "__utmv" => NULL
            "cookies_info" => NULL
            "onet_cinfo" => NULL
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
    protected _referrer => NULL
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
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
    protected _referrer => NULL
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
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
	
				Included files (73)
		
			
								
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
				
								
					session
					string(32) "8d82e77768e8759ef8512c6fcb5617dd"
				
							
		
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
				
								
					HTTP_COOKIE
					string(254) "__utma=111872281.2137565055.1363209479.1364311035.1372336163.6; __utmz=111872281.1363209479.1.1.utmcsr=(direct)|utmccn=(direct)|&nbsp;&hellip;"
				
								
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
					string(5) "42201"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(10) "/moj-klub/"
				
								
					SCRIPT_NAME
					string(19) "/moj-klub/index.php"
				
								
					PHP_SELF
					string(19) "/moj-klub/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1373012597,424
				
								
					REQUEST_TIME
					integer 1373012597
				
								
					argv
					array(0) 
				
								
					argc
					integer 0
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:23:17 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:24:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:24:26 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/system/classes/Kohana/Core.php(668): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(255): Kohana_Core::find_file('views', Object(View))
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#8 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#15 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:24:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: view_container ~ APPPATH/views/Template.php [ 16 ] in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:24:26 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 [internal function]: Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/I18n.php(164): strtr('The requested v...', Array)
#6 /home/t/www/moj-klub/system/classes/Kohana/Kohana/Exception.php(53): __('The requested v...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(259): Kohana_Kohana_Exception->__construct('The requested v...', Array)
#8 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#10 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#11 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#14 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#17 {main} in /home/t/www/moj-klub/application/views/Template.php:16
2013-07-05 10:24:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view 
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
	
		APPPATH/views/Template.php [ 16 ]
		11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;		
					
				
					
													APPPATH/views/Template.php [ 16 ]
											
					&raquo;
					Kohana_Core::error_handler(arguments)
				
								
					
											
							0
							integer 8
						
											
							1
							string(34) "Undefined variable: view_container"
						
											
							2
							string(51) "/home/t/www/moj-klub/application/views/Template.php"
						
											
							3
							integer 16
						
											
							4
							array(3) (
    "kohana_view_filename" => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    "kohana_view_data" => array(0) 
    "page_title" => string(7) "Welcome"
)
						
										
				
													11         
12     &lt;/head&gt;
13     &lt;body&gt;
14 &lt;?php echo View::factory('Header/Header');?&gt;
15 &lt;div class="container-fluid"&gt;&lt;!-- for ajax --&gt;
16 &lt;?php echo $view_container;?&gt;
17 &lt;/div&gt;
18 &lt;?php echo View::factory('Footer/Footer');?&gt;
19 	&lt;/body&gt;
20 &lt;/html&gt;
							
								
				
					
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

							
								
				
					
													APPPATH/classes/Controller/Automatic.php [ 22 ]
											
					&raquo;
					Kohana_View::factory(arguments)
				
								
					
											
							0
							object View(2) {
    protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
    protected _data => array(0) 
}
						
										
				
													17 			echo $output;
18 		}
19 		else
20 		{
21 			$view_container=View::factory('Container/Main')-&gt;set('view', $this-&gt;view_content);
22 			$this-&gt;template=View::factory($this-&gt;template)-&gt;set('view_container', $view_container);
23 		}
24 		parent::after();
25 	}
26 	public $template='Template';
27 	public $page_title;

							
								
				
					
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
							object Controller_Welcome(7) {
    public template => object View(2) {
        protected _file => string(51) "/home/t/www/moj-klub/application/views/Template.php"
        protected _data => array(0) 
    }
    public page_title => string(7) "Welcome"
    public view_container => NULL
    public view_content => object View(2) {
        protected _file => string(65) "/home/t/www/moj-klub/application/views/Container/Welcome/Main.php"
        protected _data => array(0) 
    }
    public auto_render => bool TRUE
    public request => object Request(19) {
        protected _requested_with => NULL
        protected _method => string(3) "GET"
        protected _protocol => string(8) "HTTP/1.1"
        protected _secure => bool FALSE
        protected _referrer => NULL
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
        protected _cookies => array(6) (
            "__utma" => NULL
            "__utmz" => NULL
            "__utmv" => NULL
            "cookies_info" => NULL
            "onet_cinfo" => NULL
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
    protected _referrer => NULL
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
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
    protected _referrer => NULL
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
    protected _cookies => array(6) (
        "__utma" => NULL
        "__utmz" => NULL
        "__utmv" => NULL
        "cookies_info" => NULL
        "onet_cinfo" => NULL
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
	
				Included files (73)
		
			
								
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
				
								
					session
					string(32) "8d82e77768e8759ef8512c6fcb5617dd"
				
							
		
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
				
								
					HTTP_COOKIE
					string(254) "__utma=111872281.2137565055.1363209479.1364311035.1372336163.6; __utmz=111872281.1363209479.1.1.utmcsr=(direct)|utmccn=(direct)|&nbsp;&hellip;"
				
								
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
					string(5) "42203"
				
								
					GATEWAY_INTERFACE
					string(7) "CGI/1.1"
				
								
					SERVER_PROTOCOL
					string(8) "HTTP/1.1"
				
								
					REQUEST_METHOD
					string(3) "GET"
				
								
					QUERY_STRING
					string(0) ""
				
								
					REQUEST_URI
					string(10) "/moj-klub/"
				
								
					SCRIPT_NAME
					string(19) "/moj-klub/index.php"
				
								
					PHP_SELF
					string(19) "/moj-klub/index.php"
				
								
					REQUEST_TIME_FLOAT
					float 1373012666,193
				
								
					REQUEST_TIME
					integer 1373012666
				
								
					argv
					array(0) 
				
								
					argc
					integer 0
				
							
		
			

 could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:24:26 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/View.php(137): Kohana_View->set_filename(Object(View))
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(30): Kohana_View->__construct(Object(View), NULL)
#2 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(22): Kohana_View::factory(Object(View))
#3 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#9 {main} in /home/t/www/moj-klub/system/classes/Kohana/View.php:137
2013-07-05 10:45:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/classes/Controller/User.php [ 29 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:29
2013-07-05 10:45:28 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 29, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:29
2013-07-05 14:03:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: show_email ~ APPPATH/classes/Controller/User.php [ 22 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:22
2013-07-05 14:03:05 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 22, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:22
2013-07-05 14:06:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: show_email ~ APPPATH/classes/Controller/User.php [ 22 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:22
2013-07-05 14:06:14 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(22): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 22, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:22
2013-07-05 14:30:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: show_email ~ APPPATH/classes/Controller/User.php [ 15 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:15
2013-07-05 14:30:03 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(15): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 15, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:15
2013-07-05 16:33:51 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'password_confirm' ~ SYSPATH/classes/Kohana/Valid.php [ 548 ] in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:33:51 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(548): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/t/www/moj...', 548, Array)
#1 [internal function]: Kohana_Valid::matches(':Validation', 'password_confir...', 'password')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:37:31 --- EMERGENCY: Kohana_Exception [ 0 ]: The password_confirm property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:18
2013-07-05 16:37:31 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(18): Kohana_ORM->set('password_confir...', '')
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:18
2013-07-05 16:40:05 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'password_confirm' ~ SYSPATH/classes/Kohana/Valid.php [ 548 ] in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:40:05 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(548): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/t/www/moj...', 548, Array)
#1 [internal function]: Kohana_Valid::matches(':Validation', 'password_confir...', 'password')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:40:57 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'password_confirm' ~ SYSPATH/classes/Kohana/Valid.php [ 548 ] in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:40:57 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(548): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/t/www/moj...', 548, Array)
#1 [internal function]: Kohana_Valid::matches(':Validation', 'password_confir...', 'password')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:41:50 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'password_confirm' ~ SYSPATH/classes/Kohana/Valid.php [ 548 ] in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:41:50 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(548): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/t/www/moj...', 548, Array)
#1 [internal function]: Kohana_Valid::matches(':Validation', 'password_confir...', 'password')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:43:41 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'password_confirm' ~ SYSPATH/classes/Kohana/Valid.php [ 548 ] in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:43:41 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(548): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/t/www/moj...', 548, Array)
#1 [internal function]: Kohana_Valid::matches(':Validation', 'password_confir...', 'password')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:45:39 --- EMERGENCY: ErrorException [ 2 ]: Illegal string offset 'password_confirm' ~ SYSPATH/classes/Kohana/Valid.php [ 548 ] in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:45:39 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(548): Kohana_Core::error_handler(2, 'Illegal string ...', '/home/t/www/moj...', 548, Array)
#1 [internal function]: Kohana_Valid::matches(':Validation', 'password_confir...', 'password')
#2 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /home/t/www/moj-klub/application/classes/Controller/User.php(25): Kohana_Validation->check()
#4 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#10 {main} in /home/t/www/moj-klub/system/classes/Kohana/Valid.php:548
2013-07-05 16:48:16 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Unknown modifier '$' ~ SYSPATH/classes/Kohana/Valid.php [ 39 ] in :
2013-07-05 16:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/home/t/www/moj...', 39, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(39): preg_match('^(1)|(^$)$', 'show_phone')
#2 [internal function]: Kohana_Valid::regex('show_phone', '^(1)|(^$)$')
#3 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Kohana_Validation->check()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-07-05 16:50:49 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Unknown modifier '$' ~ SYSPATH/classes/Kohana/Valid.php [ 39 ] in :
2013-07-05 16:50:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): U...', '/home/t/www/moj...', 39, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Valid.php(39): preg_match('^(1)|(^$)$', 'checked')
#2 [internal function]: Kohana_Valid::regex('checked', '^(1)|(^$)$')
#3 /home/t/www/moj-klub/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#4 /home/t/www/moj-klub/application/classes/Controller/User.php(24): Kohana_Validation->check()
#5 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#11 {main} in :
2013-07-05 17:16:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: captcha ~ APPPATH/views/Component/Form/Registrate.php [ 92 ] in /home/t/www/moj-klub/application/views/Component/Form/Registrate.php:92
2013-07-05 17:16:41 --- DEBUG: #0 /home/t/www/moj-klub/application/views/Component/Form/Registrate.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/t/www/moj...', 92, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#2 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#3 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/t/www/moj-klub/application/views/Component/Window/Modal/Registrate.php(11): Kohana_View->__toString()
#5 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#6 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#7 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#8 /home/t/www/moj-klub/application/views/Container/Welcome/Main.php(14): Kohana_View->__toString()
#9 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#10 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#11 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#12 /home/t/www/moj-klub/application/views/Container/Main.php(3): Kohana_View->__toString()
#13 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#14 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#15 /home/t/www/moj-klub/system/classes/Kohana/View.php(228): Kohana_View->render()
#16 /home/t/www/moj-klub/application/views/Template.php(16): Kohana_View->__toString()
#17 /home/t/www/moj-klub/system/classes/Kohana/View.php(61): include('/home/t/www/moj...')
#18 /home/t/www/moj-klub/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/t/www/moj...', Array)
#19 /home/t/www/moj-klub/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#20 /home/t/www/moj-klub/application/classes/Controller/Automatic.php(25): Kohana_Controller_Template->after()
#21 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(87): Controller_Automatic->after()
#22 [internal function]: Kohana_Controller->execute()
#23 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#24 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#26 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#27 {main} in /home/t/www/moj-klub/application/views/Component/Form/Registrate.php:92
2013-07-05 17:18:11 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-05 17:18:11 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/modules/orm/classes/Model/Auth/User.php(59): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1170): Model_Auth_User->filters()
#6 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('email', '')
#7 /home/t/www/moj-klub/application/classes/Controller/User.php(16): Kohana_ORM->set('email', '')
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-05 17:21:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Captcha_Alpha::generata_challenge() ~ APPPATH/classes/Controller/User.php [ 45 ] in :
2013-07-05 17:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-05 17:22:33 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-05 17:22:33 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/modules/orm/classes/Model/Auth/User.php(59): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1170): Model_Auth_User->filters()
#6 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('email', '')
#7 /home/t/www/moj-klub/application/classes/Controller/User.php(16): Kohana_ORM->set('email', '')
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-05 20:14:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: show_phone ~ APPPATH/classes/Controller/User.php [ 16 ] in /home/t/www/moj-klub/application/classes/Controller/User.php:16
2013-07-05 20:14:11 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/User.php(16): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 16, Array)
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/User.php:16
2013-07-05 21:12:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: info ~ MODPATH/orm/classes/Kohana/ORM.php [ 1564 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1564
2013-07-05 21:12:06 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1564): Kohana_Core::error_handler(8, 'Undefined index...', '/home/t/www/moj...', 1564, Array)
#1 /home/t/www/moj-klub/application/classes/Controller/Welcome.php(30): Kohana_ORM->add('info', Object(Model_Info))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:1564
2013-07-05 21:17:58 --- EMERGENCY: Kohana_Exception [ 0 ]: The info property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/t/www/moj-klub/application/classes/Controller/Welcome.php:30
2013-07-05 21:17:58 --- DEBUG: #0 /home/t/www/moj-klub/application/classes/Controller/Welcome.php(30): Kohana_ORM->set('info', Object(Model_Info))
#1 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#7 {main} in /home/t/www/moj-klub/application/classes/Controller/Welcome.php:30
2013-07-05 21:21:34 --- EMERGENCY: Kohana_Exception [ 0 ]: The info property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 757 ] in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:699
2013-07-05 21:21:34 --- DEBUG: #0 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(699): Kohana_ORM->set('info', Object(Model_Info))
#1 /home/t/www/moj-klub/application/classes/Controller/Welcome.php(30): Kohana_ORM->__set('info', Object(Model_Info))
#2 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_test()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#8 {main} in /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php:699
2013-07-05 22:00:17 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-05 22:00:17 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/modules/orm/classes/Model/Auth/User.php(59): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1170): Model_Auth_User->filters()
#6 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('email', '')
#7 /home/t/www/moj-klub/application/classes/Controller/User.php(16): Kohana_ORM->set('email', '')
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-05 22:00:41 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125
2013-07-05 22:00:41 --- DEBUG: #0 /home/t/www/moj-klub/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /home/t/www/moj-klub/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /home/t/www/moj-klub/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 /home/t/www/moj-klub/modules/orm/classes/Model/Auth/User.php(59): Kohana_Auth::instance()
#5 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(1170): Model_Auth_User->filters()
#6 /home/t/www/moj-klub/modules/orm/classes/Kohana/ORM.php(729): Kohana_ORM->run_filter('email', '')
#7 /home/t/www/moj-klub/application/classes/Controller/User.php(16): Kohana_ORM->set('email', '')
#8 /home/t/www/moj-klub/system/classes/Kohana/Controller.php(84): Controller_User->action_registrate()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/t/www/moj-klub/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /home/t/www/moj-klub/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/t/www/moj-klub/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /home/t/www/moj-klub/index.php(118): Kohana_Request->execute()
#14 {main} in /home/t/www/moj-klub/system/classes/Kohana/Session.php:125