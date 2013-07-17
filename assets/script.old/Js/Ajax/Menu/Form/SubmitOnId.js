(function(){
	strz_Ajax.SubmitOnId=function(rel){
		this.setTrigger($('input[rel='+rel+']'));

	};
	/**
	 * extendable container
	 */
	strz_Ajax.SubmitOnId.prototype={
		init:function(){
	
			var trigger=this.getTrigger();
			if(!trigger.length&&this.getContentShow()){
				var rel=$(this.getContentShow().selector+' input[rel]').attr('rel');
				this.setTrigger($('input[rel='+rel+']'));
				trigger=this.getTrigger();
			}else if(!trigger.length){
			/*	this.setTrigger($('input[rel]'));
				trigger=this.getTrigger();
				console.log(this)*/
			}
			if(trigger.length>0){
				this.setTrigger($(trigger.selector));
				var form=$('div.well>form');
			//	if(!form.length)form=$('form');
				this.setSendToURL(form[0].action);
				this.setSendInformator(trigger);
				this.setDataToSend(form);
				this.setContentShow(form);
				this.setEventName('click');
				this.initClick();

			}else{
				console.log(this);	
				//throw 'no trigger';
			}
		},
		onDone:function(self, dataView, that){
			data=JSON.parse(dataView);
			var content=that.getContentShow();
			content.hide();
			content[0].outerHTML=(data.View);
			content.fadeIn('slow');
			if(data.status){
				if(data.status['reload']=='true'){
					$('header+*').fadeTo( 'slow', 0.5 );
					setTimeout(function(){document.location.reload();},2000);
				}
				$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
			}
			var relOfSubmit=$(that.getContentShow().selector+' input[rel]').attr('rel');
			if(!relOfSubmit)relOfSubmit=that.getTrigger().attr('rel');
			that.setTrigger($('[rel='+relOfSubmit+']'));
			that.init();
		}
	};
	strz_Ajax.Extend(strz_Ajax.SubmitOnId, strz_Ajax.ViewPostAction);
})();