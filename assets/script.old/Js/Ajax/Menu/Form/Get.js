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
				this.setSendToURL(trigger[0].href);
				this.setSendInformator(trigger);
				this.setContentShow($('#AccessModal>#ContentModal'));
				this.setEventName('click');
				this.initClick();
			}
		},
		onDone:function(self, dataView, that){
			that.init();
			var here = that.getSendInformator();
			here.fadeIn('slow');
			data=JSON.parse(dataView);
			var content=that.getContentShow();
			content.html(data.View);
			content.parent().modal('show');

			var relOfSubmit=$(that.getContentShow().selector+' a[rel]').attr('rel');
			if(!relOfSubmit)relOfSubmit=that.getTrigger().attr('rel');
//that.getTrigger().attr('rel')
			console.log(relOfSubmit);
			this.submitForm=new strz_Ajax.Submit(relOfSubmit.replace(/_get/,''));
			this.submitForm.init();
			
			this.getForm=new strz_Ajax.GetForm(relOfSubmit);
			this.getForm.init();
			
		}
	};
	strz_Ajax.Extend(strz_Ajax.GetForm, strz_Ajax.ViewGetAction);
})();