(function(){
	strz_Ajax.Index=function(rel){
		rel= (typeof rel!=='undefined')? rel :'index';
		this.setTrigger($('a[rel='+rel+']'));
		this.setSendInformator($('header+.container-fluid'));
		this.setContentShow($('header+.container-fluid'));
		this.setAllowedPages(['/moj-klub/', '/moj-klub/index.php', '/moj-klub/index.php/']);
	};
	/**
	 * extendable container
	 */
	strz_Ajax.Index.prototype={
		isAllowedPage:function(action){
			var allowed=false;
			var pages=this.allowedPages;
			for(var page in pages){
				if(action===pages[page])allowed=true;
			}
			return allowed;
		}
	};
	strz_Ajax.Extend(strz_Ajax.Index, strz_Ajax.ViewGetAction);
})();