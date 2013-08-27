/**
 * source: 
 *  https://bitbucket.org/CodeCats/canvasconsole/src/5cfc75c3b4afbd8fdef0357436fb61dd8ab0d3b1/assets/script/Js/Class/CanvasConsole/Lib/Node.js?at=master
 * 
 * @returns {undefined}
 */
'use strict';
(function(){
    strz_Ajax.Notificator = function (obj){
    	var self = this;
    	var __construct = function(obj){
        	self._set('ask', 3000);//sec
        	self.init();

    	}
    	__construct(obj);
    };
    strz_Ajax.Notificator.prototype = {
    	init : function() {
    		var checkFunction = this.checker();
    		var intervalValue = this._get('ask');
    		
    		/**
    		 * Requestor ask serwer in interval
    		 */
    		this.initRequestor();
    		
    		/**
    		 * Get counfiguration data from serwer before interval
    		 */
    		this.getConfig();

    		this.interval = window.setInterval(function(){
    			checkFunction();
    				
    		}, intervalValue);
    	},
    	interval : null,
    	lastCheckedTime : 0,
    	checker : function() {
    		var self = this;
    		return function() {
    			var date = new Date();
    			self.lastCheckedTime = date.getTime();
    	//		console.log('ajax request interval checker...');
    		}
    	},
    	alert : function() {
    		alert('true');
    	},
    	requestor : null,
    	initRequestor : function() {
    		this.requestor = new strz_Ajax.NodeAction();

			/**
			 * setting destination of the request
			 */
			
    		var destination = this.getDestination('notification');
			//set up ajax request
			this.requestor.setSendToURL(destination)
			//dont do anything on done
			this.requestor.ajaxDone = this.alert;
			//do send the request
			this.requestor.ajaxInitialize();
    	},
    	getConfig : function() {
    		var destination = this.requestor.getSendToURL();

    		this.requestor.setSendToURL(this.getDestination('notification-config'));
    		this.requestor.ajaxInitialize();
    		
    		this.requestor.setSendToURL(destination);
    	},
    	/**
    	 * returns the destination of url
    	 */
    	getDestination : function(action){
    		var protocol = window.document.location.protocol;
			var host = window.document.location.host;
			var secoundLevel = window.location.pathname.split('/')[1];

			return (protocol + '//' + host + '/' + secoundLevel
					+ '/index.php/ajax/'+action);
    	},
        attrs : {},
        _get : function(attribute) {
            return this.attrs[attribute];
        },
        _set : function(attribute, value) {
            this.attrs[attribute] = value;
        },
        _initAttrs : function(obj) {
            for (var i in obj)this._set(i, obj[i]);
        }
    };
    // ROOT element
})();