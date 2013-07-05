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
		}
	};
	strz_Ajax.Extend(strz_Ajax.Submit, strz_Ajax.ViewPostAction);
})();