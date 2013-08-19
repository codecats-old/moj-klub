/**
 * Initialize object on given key
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
		}
	};
})();