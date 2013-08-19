/**
 * Singleton create objects.
 * Initialize object on given key 
 * objects is objects allowed to create,
 * accessTable is all possible classes to create
 * running is all created instances
 */
(function() {
	strz_Ajax.Factory = {

		/**
		 * Ids of object allowed to create
		 */
		accessTable : [],
		
		setAccessTable : function(table) {
			this.accessTable = table;
		},
		
		/**
		 * objects allowed to create: id, name
		 */
		objects : {},
		
		setObjects : function(obj) {
			this.objects = obj;
		},
		
		/**
		 * Objects already created
		 */
		running : [],
		
		/**
		 * Create objects if they are allowed in access table
		 */
		create : function(name) {
			for (var i in this.accessTable) {
				var tableId = this.accessTable[i];
				if (this.objects[tableId] === name) {
					if (typeof(this.running[tableId]) === 'undefined'){
						this.running[tableId] = new strz_Ajax[name]();
					}
					return this.running[tableId];
					
				}
			}
		},
		
		/**
		 * Create objects without checking permission in access table
		 */
		constructor : function(name) {
			
			for (var i in this.objects) {

				if (this.objects[i] === name) {
					return new strz_Ajax[name]();
				}
			}
		}
	};
})();