
(function() {
	strz_Ajax.Data = {
		/**
		 * Local storage object
		 */
		resources : null,
		/**
		 * Session storage object
		 */
		resourcesSession : null,
		
		/**
		 * namespace
		 */
		prefix : 'strz_Ajax.Data.',
		
		/**
		 * Local storage interface
		 */
		save : function(name, value) {
			return this._insert(this.resources, name, value);
		},
		load : function(name) {
			return this._select(this.resources, name);
		},
		clear : function(name) {
			return this._delete(this.resources, name);
		},
		//
		
		/**
		 * Session storage interface
		 */
		set : function(name, value) {
			return this._insert(this.resourcesSession, name, value);
		},
		get : function(name) {
			return this._select(this.resourcesSession, name);
		},
		remove : function(name) {
			return this._delete(this.resourcesSession, name);
		},
		//
		
		/**
		 * Commands to store, load and remove data
		 */
		_insert : function(storage, name, value) {
			storage.setItem(this._getField(name), value);
			return this;
		},
		_select : function(storage, name) {
			var value = storage.getItem(this._getField(name));
			return this._filter(value);
		},
		_delete : function(storage, name) {
			if (typeof(name) === 'undefined'){
				storage.clear();
			} else {
				storage.removeItem(this._getField(name));
			}
			return this;
		},
		/**
		 * Save data with the namespace
		 */
		_getField : function(name) {
			return (this.prefix+name);
		},
		
		/**
		 * Storage is save as string so filter is needed
		 */
		_filter : function(val) {
			return JSON.parse(val);
		}
		
	};

	//CONFIG
	if(typeof(Storage) !== "undefined")	{
		strz_Ajax.Data.resources = localStorage;
		strz_Ajax.Data.resourcesSession = sessionStorage;
	} else {
		console.log('Browser not support HTML5 Storage. What\'s a pity...')
	}
})();

