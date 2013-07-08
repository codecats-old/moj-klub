(function(){
	strz_Ajax.ViewPostAction=function(rel){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.ViewPostAction.prototype={
		onDone:function(self, dataView, that){
			data=JSON.parse(dataView);
			var content=that.getContentShow();
			content.hide();
			content.html(data.View);
			content.fadeIn('slow');
			if(data.status)$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
		}		
	};
	strz_Ajax.Extend(strz_Ajax.ViewPostAction, strz_Ajax.PostAction);
})();