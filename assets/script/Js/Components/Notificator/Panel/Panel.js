/**
 * source: 
 *  https://bitbucket.org/CodeCats/canvasconsole/src/5cfc75c3b4afbd8fdef0357436fb61dd8ab0d3b1/assets/script/Js/Class/CanvasConsole/Lib/Node.js?at=master
 * 
 */

"use strict";
(function(){
    strz_Ajax.Panel = function (obj) {
    	var self = this;
    	var __construct = function(obj) {}
    	__construct(obj);
    };
    strz_Ajax.Panel.prototype = {
        
    	/**
    	 * Requestor ask server for new or update messages
    	 */
    	requestor 			: null,
    	
    	/**
    	 * Timeout for check when close panel content
    	 */
    	mouseOverTimeout 	: null,
    	
    	/**
    	 * Button continue read or read more.
    	 */
    	continueRead		: null,
    	
    	/**
    	 * Listener opens panel on given event
    	 */
    	initOpenListener : function(trigger, triggerMenu) {
      		$(trigger).on('click', function() {		
    			$(trigger).children().removeClass('icon-envelope');
    			$(trigger).children().addClass('icon-refresh');
    			
    			$(triggerMenu).fadeIn('fast');
    		});
    	},
    	
    	/**
    	 * Listener close panel on given event(s);
    	 */
    	initCloseListener : function(trigger, triggerMenu) {
    		var mouseOverTimeout = this.mouseOverTimeout;
    		var closeOperation = function(speed) {
    			$(triggerMenu).fadeOut(speed);
				$(trigger).children().removeClass('icon-refresh');
				$(trigger).children().addClass('icon-envelope');
    		}
    		
    		/**
    		 * Close timeout
    		 */
    		$(triggerMenu).on('mouseleave', function(eve) {
    			mouseOverTimeout = window.setTimeout(function() {
    				closeOperation('fast');
    			}, 1500);
    		});
    		/**
    		 * Stop timeout
    		 */
    		$(triggerMenu).on('mouseenter', function(eve) {
    			if (mouseOverTimeout) clearTimeout(mouseOverTimeout);
    		});
    		
    		/**
    		 * Close button
    		 */
    		$(triggerMenu+' .close').on('click', function(eve) {
    			closeOperation('slow');
    		});
    	},
    		
    	init : function() {
    		var trigger = 'a[rel=notification-icon]';
    		
    		/**
    		 * Gets new requests from serwer
    		 */
    		this.requestor = new strz_Ajax.NotificatorPanelAjaxGet(trigger);
    		this.requestor.run();
    		
    		/**
    		 * Content of Panel. requests are shown inside it.
    		 */
    		var triggerMenu = 'ul[rel=notification-menu]'; 
    		/**EVENTS - open close**/
    		this.initOpenListener(trigger, triggerMenu);
    		this.initCloseListener(trigger, triggerMenu);
    		/**>EVENTS**/
    		
    		/**
    		 * Button continue read 
    		 */
			this.continueRead = new strz_Ajax.NotificatorPanelAjaxContinue(
								'button[rel=notification-featch-more]', 
								trigger, 
								'ul[rel=notification-messages]');
			this.continueRead.run();
			
			/**
			 * When new request are featched call suitable listeners
			 */
			this.requestor.addCallback({
				continueRead : {
					reference:this.continueRead,
					methods:{
						'run':null
					}
				}
			});
			
    	}
    };
    // ROOT element
})();