(function(){
	strz_Ajax.ViewGetAction=function(rel){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.ViewGetAction.prototype={
		onDone:function(self, dataView, that){
			var content=that.getContentShow();
			content.hide();
			content.html(dataView);
			content.fadeIn('slow');
		}
	};
	strz_Ajax.Extend(strz_Ajax.ViewGetAction, strz_Ajax.GetAction);
})();