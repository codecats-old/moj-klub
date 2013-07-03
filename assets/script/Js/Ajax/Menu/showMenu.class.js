(function(){
	strz_Bookmark.showMenu=function(rel){
		rel= (typeof rel!=='undefined')? rel :'show-';
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		};
	};
	
	/**
	 * extendable container
	 */
	strz_Bookmark.showMenu.prototype={
		onDone:function(self, dataView, that){
			$('.content').html(dataView);
			//self[0].outerHTML=dataView;
		},
		setBeforeSendAjax:function(that){
			that.uber.setBeforeSendAjax(that, $('.content'));
		}
		
	};
	strz_Bookmark.Extend(strz_Bookmark.showMenu, strz_Bookmark.ViewGetAction);
})();