(function(){
	strz_Bookmark.showRecom=function(rel){
		rel= (typeof rel!=='undefined')? rel :'show-recommendations';
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		};
	};
	
	/**
	 * extendable container
	 */
	strz_Bookmark.showRecom.prototype={
		setBeforeSendAjax:function(that){
				that.uber.setBeforeSendAjax(that, $('.content'));
			}
	};
	strz_Bookmark.Extend(strz_Bookmark.showRecom, strz_Bookmark.show);
})();