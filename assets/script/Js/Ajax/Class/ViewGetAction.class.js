(function(){
	strz_Ajax.ViewGetAction=function(rel){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.ViewGetAction.prototype={
		onDone:function(self, dataView, that){
			data=JSON.parse(dataView);
			var content=that.getContentShow();
			content.hide();
			content.html(data.View);
			content.fadeIn('slow');
		}
	};
	strz_Ajax.Extend(strz_Ajax.ViewGetAction, strz_Ajax.GetAction);
})();