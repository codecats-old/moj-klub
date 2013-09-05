(function() {
	strz_Ajax.Http = {
		baseDir : null,
		getHost : function() {
			return window.document.location.host;
		},
		getSecoundLevel : function() {
			var secoundLvl = (this.baseDir !== null) ? this.baseDir : this.readBaseDirCookie();
			return secoundLvl;
		},
		getUrl : function() {
			var protocol = window.document.location.protocol;
			var host = this.getHost();
			var secoundLevel = this.getSecoundLevel();

			var url = protocol + '//' + host + secoundLevel;
			if (url.substr(url.length - 1) === '/') url = url.substr(0, url.length -1);
			return url;
		},
		getIndexName : function(separator) {
			separator = (typeof(separator) === 'undefined' || separator === false) ? '' : '/';
			return ('index.php'+separator);
		},
		getFullUrl : function(separator) {
			var url = this.getUrl() + '/' + this.getIndexName(separator);
			return url;
		},
		readBaseDirCookie : function() {
			var baseDir = $.cookie('basedir');
			baseDir = baseDir.split('~')[1];
			this.baseDir = baseDir;
			
			return (typeof(baseDir !== 'undefined') ? baseDir : ''); 
		}
	};
})();

