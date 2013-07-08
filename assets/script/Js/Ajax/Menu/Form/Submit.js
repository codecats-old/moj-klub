(function(){
	strz_Ajax.Submit=function(rel){
		this.setTrigger($('input[rel='+rel+']'));

	};
	/**
	 * extendable container
	 */
	strz_Ajax.Submit.prototype={name:'submit',
		setBeforeSendAjax:function(that){
			var here=that.getSendInformator();
			here.button('loading');
		},
		init:function(){
			var trigger=this.getTrigger();
			if(trigger.length>0){
				var form=trigger.parent().parent();
				this.setSendToURL(form[0].action);
				this.setSendInformator(trigger);
				this.setDataToSend(form);
				this.setContentShow(form);
				this.setEventName('click');
				this.initClick();
			}
		},
		onDone:function(self, dataView, that){
			data=JSON.parse(dataView);
			var content=that.getContentShow();
			content.hide();
			content.html(data.View);
			content.fadeIn('slow');
			if(data.status)$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
			if(data.status['state']=='Success'){
				this.submit_login=new strz_Ajax.GetForm('login_form');
				this.submit_login.init();
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.Submit, strz_Ajax.ViewPostAction);
})();