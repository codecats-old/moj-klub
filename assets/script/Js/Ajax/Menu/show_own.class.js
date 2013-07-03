(function(){
	strz_Bookmark.showOwn=function(rel){
		rel= (typeof rel!=='undefined')? rel :'show-own';
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		};
	};
	
	/**
	 * extendable container
	 */
	strz_Bookmark.showOwn.prototype={
		setBeforeSendAjax:function(that){
				that.uber.setBeforeSendAjax(that, $('.content'));
			}
	};
	strz_Bookmark.Extend(strz_Bookmark.showOwn, strz_Bookmark.show);
})();