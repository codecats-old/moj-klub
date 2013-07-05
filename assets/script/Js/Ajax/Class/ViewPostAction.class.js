(function(){
	strz_Ajax.ViewPostAction=function(rel){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.ViewPostAction.prototype={
			onDone:function(self, dataView, that){
				var content=that.getContentShow();
				content.hide();
				content.html(dataView);
				content.fadeIn('slow');
			}		
	};
	strz_Ajax.Extend(strz_Ajax.ViewPostAction, strz_Ajax.PostAction);
})();