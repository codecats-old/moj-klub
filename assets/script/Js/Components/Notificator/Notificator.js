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
        	self._set('intervalTime', self.minimumIntervalValue);//milisec
        	self.init();

    	}
    	__construct(obj);
    };
    strz_Ajax.Notificator.prototype = {
    		
    	/**
    	 * Notification time value (blinking value)
    	 */
    	durationTime 				: null,
    	
    	/**
    	 * Interval doing requests in specific time [ms]
    	 */
    	interval 					: null,
    	
    	/**
    	 * Timestamp of last received request (update only when success request)
    	 */
    	lastCheckedTime 			: 0,
    	
    	/**
    	 * If blinking status on the serwer is active value is true
    	 */
    	isActive 					: null,
    	
    	/**
    	 * Data from serwer, time of last notification begin
    	 */
    	lastNotificationTimeFrom 	: 0,
    	
    	/**
    	 * Data from serwer, time of last notification end
    	 */
    	lastNotificationTimeTo 		: 0,
    	
    	/**
    	 * Object to send asynchronous requests
    	 */
    	requestor 					: null,
    	
    	/**
    	 * Data storage
    	 */
        attrs 						: {},
        
        /**
         * Object represents panel content
         */
        panel 						: null,
        
        /**
         * Minimum interval value if data is not available
         */
        minimumIntervalValue 		: 10000, //[ms]
        
    	init : function() {
    		/**
    		 * Status updater (check status for serwer or cache)
    		 */
    		var checkFunction = this.checker();

    		/**
    		 * Requestor ask serwer in interval
    		 */
    		this.initRequestor();
    		/**
    		 * Get counfiguration data from serwer before interval
    		 */
    		this.getConfig();

    		/**
    		 * Interval check status;
    		 */
    		var intervalValue = this._get('intervalTime');
    		this.interval = window.setInterval(function(){
    			checkFunction();
    				
    		}, intervalValue);
    		
    		//default action after panel request
    		var changeIcon = this.changeIcon;
    		this.panel = new strz_Ajax.Panel(function(){ 
    			changeIcon(false);
    		});
    		this.panel.init();
    	},
    	checker : function() {
    		var self = this;
    		return function() {
    			var date = new Date();
    			
    			/**
    			 * Read data from storage
    			 */
    			if (typeof(self.lastNotificationTimeFrom) === 'undefined') {
    				self.isActive = strz_Ajax.Data.get('isActive');
    				self.lastNotificationTimeFrom = strz_Ajax.Data.get('lastNotificationTimeFrom');
    				self.lastNotificationTimeTo = strz_Ajax.Data.get('lastNotificationTimeTo');
  
				}

    			/**
    			 * If no information in cache then ask asynchronous for data.
    			 */
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
    	
    	/**
    	 * Sets blinking status (only view)
    	 */
    	changeIcon : function(active) {
    		if (active === true){
				$('a[rel=notification-icon]').addClass('blinking-icon');
			} else {
				$('a[rel=notification-icon]').removeClass('blinking-icon');
			}
    	},
    	
    	/**
    	 * Prepare requestor behavior, and data.
    	 */
    	initRequestor : function() {
    		
    		this.requestor = new strz_Ajax.NodeAction();
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
					data.from = (data.from === null) ? 0 : data.from;
					data.to = (data.to === null) ? 0 : data.to;
					data.from *= 1000;
					data.to *= 1000;
					
					self.isActive = data.active;
					self.lastNotificationTimeFrom = data.from;
					self.lastNotificationTimeTo = data.to;
					
					strz_Ajax.Data.set('isActive', data.active);
					strz_Ajax.Data.set('lastNotificationTimeFrom', data.from);
					strz_Ajax.Data.set('lastNotificationTimeTo', data.to);
					
					self.changeIcon(self.isActive);
				}
			}
			
    	},
    	
    	/**
    	 * If config is not in cache ask asynchronous for data
    	 */
    	getConfig : function() {
    		if (strz_Ajax.Data.get('durationTime') === undefined || strz_Ajax.Data.get('durationTime') === null){
    			strz_Ajax.Data.set('durationTime', (this.minimumIntervalValue / 1000));
	    		var destination = this.requestor.getSendToURL();
	
	    		this.requestor.setSendToURL(this.getDestination('notification-config'));
    			this.requestor.ajaxInitialize();

	    		this.requestor.setSendToURL(destination);
    		} else {
    			this.durationTime = strz_Ajax.Data.get('durationTime');
    			strz_Ajax.Data.set('durationTime', this.durationTime);
    			
    			if (this.durationTime !== null) {
    				this._set('intervalTime', (this.durationTime * 1000));//*1000  = 120 [s]
    			} else {
    				this._set('intervalTime', (this.minimumIntervalValue));
    			}
    				
    			
    		}
    	},
    	/**
    	 * returns the destination of url
    	 */
    	getDestination : function(action){
    		
    		return strz_Ajax.Http.getFullUrl(true)+'ajax/'+action;
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