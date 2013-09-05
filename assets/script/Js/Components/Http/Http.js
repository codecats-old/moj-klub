(function() {
	strz_Ajax.Http = {
			
		/**
		 * Base directory
		 */
		baseDir : null,
		
		/**
		 * Returns hostname
		 */
		getHost : function() {
			return window.document.location.host;
		},
		
		/**
		 * Returns secound level catalog (basedir cookie saved by serwer)
		 */
		getSecoundLevel : function() {
			var secoundLvl = (this.baseDir !== null) ? this.baseDir : this.readBaseDirCookie();
			return secoundLvl;
		},
		
		/**
		 * Get url address without data index.php
		 */
		getUrl : function() {
			var protocol = window.document.location.protocol;
			var host = this.getHost();
			var secoundLevel = this.getSecoundLevel();

			var url = protocol + '//' + host + secoundLevel;
			if (url.substr(url.length - 1) === '/') url = url.substr(0, url.length -1);
			return url;
		},
		
		/**
		 * Returns default index name
		 */
		getIndexName : function(separator) {
			separator = (typeof(separator) === 'undefined' || separator === false) ? '' : '/';
			return ('index.php'+separator);
		},
		
		/**
		 * Returns full url with index name
		 */
		getFullUrl : function(separator) {
			var url = this.getUrl() + '/' + this.getIndexName(separator);
			return url;
		},
		
		/**
		 * Reads basedir from cookie
		 */
		readBaseDirCookie : function() {
			var baseDir = $.cookie('basedir');
			baseDir = baseDir.split('~')[1];
			this.baseDir = baseDir;
			
			return (typeof(baseDir !== 'undefined') ? baseDir : ''); 
		}
	};
})();

