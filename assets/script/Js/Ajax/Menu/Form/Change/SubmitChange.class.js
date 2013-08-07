(function() {
	strz_Ajax.SubmitChange = function(rel){
		this.init();
		this.rel=rel;
	};
	strz_Ajax.SubmitChange.prototype = {
		run:function(){			
			this.setTriggerSelector('input[rel='+this.rel+']');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(true);
				this.setSendInformator(this.getTriggerSelector());
				this.setContentShow('#AccessModal>#ContentModal');
				var form=this.getForm(this.getTriggerSelector());
				this.setSendData(form);
				this.setSendToURL(form.action);
				this.ajaxRun();
			}
		},
		ajaxDone:function(data, action) {
			console.log(this);
			this.uber.ajaxDone(data,action);
			data=JSON.parse(data);
			var form=this.getForm(this.getTriggerSelector());
			this.setSendData(form);
			this.showStatusMessage(data);
		
			if(data.status['reload']==true){
				$('header+.container-fluid').fadeTo( 'slow', 0.8 );
				setTimeout(function(){document.location.reload();},2000);
			}
		},
		showStatusMessage:function(data){
			$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
		},
		getForm:function(trig){
			var submit=$(trig);
			if(submit.length>0)	return submit[0].form;
			else return null;
		}
	};
	strz_Ajax.Extend(strz_Ajax.SubmitChange, strz_Ajax.NodeAction);
})();