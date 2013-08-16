/**
 * Can read roles written in suitable format and initialize needed controllers
 */
(function() {
	strz_Ajax.Control = function() {

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
			var protocol = window.document.location.protocol;
			var host = window.document.location.host;
			var secoundLevel = window.location.pathname.split('/')[1];

			var destination = protocol + '//' + host + '/' + secoundLevel
					+ '/index.php/ajax/roles';

			//set up ajax request
			action.setSendToURL(destination)
			//dont do anything on done
			action.ajaxDone = function() {
			};
			//do send the request
			action.ajaxInitialize();
		},
		readAccessTableCookie : function() {
			var roles = $.cookie('roles');

			/**
			 * if no cookies file do action asking for them
			 */
			if (typeof roles == 'undefined')
				this.askForAccessCookie();

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
			 * when production turn off the comments
			 */
		//	try {
				var content = new strz_Ajax[this.orders[i]];
				content.run();
				this.running.push(content);
		//	} catch (err) {
		//		console.log('container for role: ' + i + ' not declared');
				// console.log(err);
		//	}
		},
		/**
		 * Run all Controllers
		 */
		runAll : function() {
			var accessTable = this.getAccessTable();
			for ( var i in accessTable) {
				this.run(accessTable[i]);
			}
		}
	};
})();