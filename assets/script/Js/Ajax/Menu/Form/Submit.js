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
			if(here.length>1){
				var insideInformation=that.getContentShow().selector;
				here=$(insideInformation+' '+here.selector);
			}
			here.button('loading');
		},
		init:function(){
			var trigger=this.getTrigger();
			if(trigger.length>0){
				var modal=$('#AccessModal>#ContentModal');
				var form=modal.children();
				this.setSendToURL(form[0].action);
				this.setSendInformator(trigger);
				this.setDataToSend(form);
				this.setContentShow(modal);
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
			if(data.status){
				if(data.status['reload']=='true'){
					$('header+*').fadeTo( 'slow', 0.5 );
					setTimeout(function(){document.location.reload();},2000);
				}
				$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
			}
			try{
				var relOfSubmit=$(that.getContentShow().selector+' input[rel]').attr('rel');
				if(!relOfSubmit)relOfSubmit=that.getTrigger().attr('rel');
				//$(that.getTrigger().selector)
				that.setTrigger($('[rel='+relOfSubmit+']'));
				that.init();
				if(that.getTrigger().length==0)throw 'no event to bind';

			}catch(err){
				if(data.status){
					if(data.status['state']=='Success'){
						var relOfSubmit=$(that.getContentShow().selector+' a[rel]').attr('rel');
						if(!relOfSubmit)relOfSubmit=that.getTrigger().attr('rel');
						that.getForm=new strz_Ajax.GetForm(relOfSubmit);
						that.getForm.init();
					}
				}
			}
			
		}
	};
	strz_Ajax.Extend(strz_Ajax.Submit, strz_Ajax.ViewPostAction);
})();