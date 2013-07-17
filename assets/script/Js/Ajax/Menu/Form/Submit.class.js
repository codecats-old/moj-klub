(function() {
	strz_Ajax.Submit = function(rel){
		this.init();
		this.rel=rel;
	};
	strz_Ajax.Submit.prototype = {
		run:function(){			
			this.setTriggerSelector('input[rel='+this.rel+']');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(true);
				this.setSendInformator(this.getTriggerSelector());
				var form=this.getForm(this.getTriggerSelector());
			
				this.setContentShow(form.parentNode);
				this.setSendData(form);
				this.setSendToURL(form.action);
				this.ajaxRun();
				
				this.addCallback({
					this:{
						reference:this,
						methods:{
							'closeForm':null
						}
					}
				});
			}
		},
		ajaxDone:function(data, action) {
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
		},
		closeForm:function(){
			var content=this.getContentShow();
			$('a[rel=form_close]').click(function(eve){
				eve.preventDefault();
				$(content).children().fadeOut('slow');
			});
		}
	};
	strz_Ajax.Extend(strz_Ajax.Submit, strz_Ajax.NodeAction);
})();