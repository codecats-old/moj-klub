(function(){
	strz_Ajax.GetForm=function(rel){
		this.setTrigger($('a[rel='+rel+']'));
	};
	/**
	 * extendable container
	 */
	strz_Ajax.GetForm.prototype={
		init:function(){
			var trigger=this.getTrigger();
			if(trigger.length>0){
				console.log(trigger);
				this.setSendToURL(trigger[0].href);
				this.setSendInformator(trigger);
				this.setContentShow($('#registryModal'));
				this.setEventName('click');
				this.initClick();
			}
		},
		onDone:function(self, dataView, that){
			data=JSON.parse(dataView);
			data=JSON.parse(dataView);
			var content=that.getContentShow();
			//content.hide();
			content.html(data.View);
			content.modal('show');
			//content.removeClass('hide');
			//content.fadeIn('slow');
			
		}
	};
	strz_Ajax.Extend(strz_Ajax.GetForm, strz_Ajax.ViewGetAction);
})();