(function(){
	strz_Bookmark.showAll=function(rel){
		rel= (typeof rel!=='undefined')? rel :'show-all';
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		};
	};
	
	/**
	 * extendable container
	 */
	strz_Bookmark.showAll.prototype={
		setBeforeSendAjax:function(that){
				that.uber.setBeforeSendAjax(that, $('.content'));
			}
	};
	strz_Bookmark.Extend(strz_Bookmark.showAll, strz_Bookmark.show);
})();