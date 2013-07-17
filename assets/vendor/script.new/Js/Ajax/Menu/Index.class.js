(function(){
	strz_Ajax.Index=function(){
		this.init();
		this.rel='index';
		this.reload=false;
		this.setContentShow('header+.container-fluid');
	};
	strz_Ajax.Index.prototype={
		isAllowedPage:function(loc){
			var allowed=false;
			var pages=this.allowedPages;
			for(var page in pages){
				if(loc===pages[page])allowed=true;
			}
			return allowed;
		}
	};
	strz_Ajax.Extend(strz_Ajax.Index, strz_Ajax.Anchor);
})();