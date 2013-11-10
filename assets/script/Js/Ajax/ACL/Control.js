/**
 * Can read roles written in suitable format and initialize needed controllers
 */
(function() {
	strz_Ajax.Control = function() {
		/*
		 * Controller Guest and Login only
		 */
		this.setOrders({
			'-1'	:	'Guest',
			'1'		:	'Login'
		});
	};
	strz_Ajax.Control.prototype = {
		accessTable : [],
		setAccessTable : function(arr) {
			for ( var i in arr) {
				this.accessTable.push(arr[i]);
			}
		},
		getAccessTable : function() {
			return this.accessTable;
		},
		/**
		 * Ask serwer to save cookie
		 */
		askForAccessCookie : function() {
			//action is object which can do ajax requests
			var action = new strz_Ajax.NodeAction();

			/**
			 * setting destination of the request
			 */	
			var destination = strz_Ajax.Http.getFullUrl(true) + 'ajax/roles'; 

			//set up ajax request
			action.setSendToURL(destination)
			//dont do anything on done
			action.ajaxDone = function() {
			};
			//do send the request
			action.ajaxInitialize();
		},
		
		/**
		 * Read cookies with access ids, if no cookies ask serwer for them
		 */
		readAccessTableCookie : function() {
			var roles = $.cookie('roles');

			/**
			 * if no cookies file do action asking for them, and set tmp role
			 */
			if (typeof roles == 'undefined') {
				this.askForAccessCookie();
				roles = '~-1';
			}
				

			/**
			 * read roles ids
			 */
			roles = roles.split('~')[1];
			var rolesTable = roles.split(',');
			//save it to table
			this.setAccessTable(rolesTable);
		},
		orders : {},
		setOrders : function(obj) {
			this.orders = obj;
		},
		running : [],
		run : function(i) {
			/*
			 * If orders table not contain object from access table do not run it,
			 * running instances are stored in running table
			 */

			if (typeof(strz_Ajax[this.orders[i]]) !== 'undefined'){	
				var content = new strz_Ajax[this.orders[i]]();
				content.run();
				//this.running.push(content);
				this.running[i] = content;
			}

		},
		/**
		 * Run all Controllers saved in access table
		 */
		runAll : function() {
			var accessTable = this.getAccessTable();
			for ( var i in accessTable) {
				this.run(accessTable[i]);
			}
		}
	};
})();