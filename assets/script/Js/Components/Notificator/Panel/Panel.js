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
    		
    	init : function() {
    		var trigger = 'a[rel=notification-icon]';
    		this.requestor = new strz_Ajax.NotificatorPanelAjaxGet(trigger);
    		this.requestor.run();
    		
    		var requestor = this.requestor;
    		
    		/**EVENTS - open close**/
    		$(trigger).on('click', function() {
    			$('ul[rel=notification-menu]').fadeIn('fast');
    		});
    		
    		var mouseOverTimeout = this.mouseOverTimeout;
    		$('ul[rel=notification-menu]').on('mouseleave', function(eve) {
    			mouseOverTimeout = window.setTimeout(function() {
    					$('ul[rel=notification-menu]').fadeOut('slow');
    				
    			}, 1500);
    		});
    		$('ul[rel=notification-menu]').on('mouseenter', function(eve) {
    			if (mouseOverTimeout) clearTimeout(mouseOverTimeout);
    		});
    		
    		$('ul[rel=notification-menu] .close').on('click', function(eve) {
    			$('ul[rel=notification-menu]').fadeOut('fast');
    		});
    		
    		/**EVENTS**/
    	
    	},

    };
    // ROOT element
})();