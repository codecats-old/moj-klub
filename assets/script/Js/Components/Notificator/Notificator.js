/**
 * source: 
 *  https://bitbucket.org/CodeCats/canvasconsole/src/5cfc75c3b4afbd8fdef0357436fb61dd8ab0d3b1/assets/script/Js/Class/CanvasConsole/Lib/Node.js?at=master
 * 
 * @returns {undefined}
 */
(function(){
    strz_Ajax.Notificator = function (obj){
    	var self = this;
    	var __construct = function(obj){
        	self._set('intervalTime', 10000);//sec
        	self.init();

    	}
    	__construct(obj);
    };
    strz_Ajax.Notificator.prototype = {
    		
    	//notification time value (blinking value)
    	durationTime 				: null,
    	interval 					: null,
    	lastCheckedTime 			: 0,
    	isActive 					: false,
    	lastNotificationTimeFrom 	: 0,
    	lastNotificationTimeTo 		: 0,
    	requestor 					: null,
        attrs 						: {},
        panel						: null,
        
        
    	init : function() {
    		this.panel = new strz_Ajax.Panel();
    		this.panel.init();
    		
    		var checkFunction = this.checker();
    		/**
    		 * Requestor ask serwer in interval
    		 */
    		this.initRequestor();
    		/**
    		 * Get counfiguration data from serwer before interval
    		 */
    		this.getConfig();

    		var intervalValue = this._get('intervalTime');
    		this.interval = window.setInterval(function(){
    			checkFunction();
    				
    		}, intervalValue);
    	},
    	checker : function() {
    		var self = this;
    		return function() {
    			
    			/**
    			 * Read data from storage
    			 */
    			if (typeof(self.lastNotificationTimeFrom) === 'undefined') {
    				self.isActive = strz_Ajax.Data.get('isActive');
    				self.lastNotificationTimeFrom = strz_Ajax.Data.get('lastNotificationTimeFrom');
    				self.lastNotificationTimeTo = strz_Ajax.Data.get('lastNotificationTimeTo');
  
				}
    			var date = new Date();

    			if (typeof(self.lastNotificationTimeFrom) === 'undefined' || 
    						self.lastNotificationTimeTo < date.getTime()) {
    				self.lastCheckedTime = date.getTime();
	    			self.requestor.ajaxInitialize();
    			}
    		}
    	},
    	ajaxDone : function(data, action) {
			data = JSON.parse(data);
    		return data;
    	},

    	initRequestor : function() {
    		this.requestor = new strz_Ajax.NodeAction();
    		this.requestor.ajaxError = function(err, action) {
    			console.log(err);
    		}
			/**
			 * setting destination of the request
			 */		
    		var destination = this.getDestination('notification');
			//set up ajax request
			this.requestor.setSendToURL(destination)
			//dont do anything on done
			var self = this;
			var ajaxDone = this.ajaxDone;
			this.requestor.ajaxDone = function(data, action){
				data = ajaxDone(data, action);
				
				if (typeof(data.duration) !== 'undefined') {
					self.durationTime = data.duration;
					strz_Ajax.Data.set('durationTime', data.duration);
				}
				if (typeof(data.active) !== 'undefined') {
					data.from *= 1000;
					data.to *= 1000;
					
					self.isActive = data.active;
					self.lastNotificationTimeFrom = data.from;
					self.lastNotificationTimeTo = data.to;
					
					strz_Ajax.Data.set('isActive', data.active);
					strz_Ajax.Data.set('lastNotificationTimeFrom', data.from);
					strz_Ajax.Data.set('lastNotificationTimeTo', data.to);
					
					if (self.isActive){
	    				$('a[rel=notification-icon]').addClass('blinking-icon');
	    			} else {
	    				$('a[rel=notification-icon]').removeClass('blinking-icon');
	    			}
				}
				
				
				
    			/****************DEBUG****************/
    	/*
				console.log('--------------- isActive '+self.isActive);
    			console.log('lastNotificationTimeFrom '+self.lastNotificationTimeFrom);
    			console.log('- lastNotificationTimeTo '+self.lastNotificationTimeTo);
    			console.log('-------- lastCheckedTime '+self.lastCheckedTime);
    	*/
			}
			
    	},
    	getConfig : function() {
    		if (strz_Ajax.Data.get('durationTime') === undefined){
	    		var destination = this.requestor.getSendToURL();
	
	    		this.requestor.setSendToURL(this.getDestination('notification-config'));
	    		this.requestor.ajaxInitialize();
	    		
	    		this.requestor.setSendToURL(destination);
    		} else {
    			this.durationTime = strz_Ajax.Data.get('durationTime');
    			strz_Ajax.Data.set('durationTime', this.durationTime);
    			this._set('intervalTime', (this.durationTime*1000));//1000  = 120
    			
    		}
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