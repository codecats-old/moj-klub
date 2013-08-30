/**
 * source: 
 *  https://bitbucket.org/CodeCats/canvasconsole/src/5cfc75c3b4afbd8fdef0357436fb61dd8ab0d3b1/assets/script/Js/Class/CanvasConsole/Lib/Node.js?at=master
 * 
 * @returns {undefined}
 */

/*

open the menu
$('a[rel=notification-icon]').parent().addClass('open')
 */
"use strict";
(function(){
    strz_Ajax.Panel = function (obj) {
    	var self = this;
    	var __construct = function(obj) {}
    	__construct(obj);
    };
    strz_Ajax.Panel.prototype = {
        
    	requestor 			: null,
    	
    	mouseOverTimeout 	: null,
    	
    	continueRead		: null,
    		
    	init : function() {
    		var trigger = 'a[rel=notification-icon]';
    		this.requestor = new strz_Ajax.NotificatorPanelAjaxGet(trigger);
    		this.requestor.run();
    		
    		var requestor = this.requestor;
    		
    		var triggerMenu = 'ul[rel=notification-menu]'; 
    		/**EVENTS - open close**/
    		$(trigger).on('click', function() {
    			$(triggerMenu).fadeIn('fast');
    		});
    		
    		var mouseOverTimeout = this.mouseOverTimeout;
    /*		$(triggerMenu).on('mouseleave', function(eve) {
    			mouseOverTimeout = window.setTimeout(function() {
    					$(triggerMenu').fadeOut('slow');
    				
    			}, 1500);
    		});*/
    		$(triggerMenu).on('mouseenter', function(eve) {
    			if (mouseOverTimeout) clearTimeout(mouseOverTimeout);
    		});
    		
    		/**
    		 * Close button
    		 */
    		$(triggerMenu+' .close').on('click', function(eve) {
    			$(triggerMenu).fadeOut('fast');
    		});
    		
    		/**>EVENTS**/
    		
			this.continueRead = new strz_Ajax.NotificatorPanelAjaxContinue(
								'button[rel=notification-featch-more]', 
								trigger, 
								'ul[rel=notification-messages]');
			this.continueRead.run();
    	},

    };
    // ROOT element
})();