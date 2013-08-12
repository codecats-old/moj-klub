(function() {
	strz_Ajax.DoAction = function(rel, sender){
		this.init();
		
		//confirm trigger 
		this.rel=rel;
		
		//button which even started
		this['sender'] = sender;
	};
	strz_Ajax.DoAction.prototype = {
		run:function(){			

			this.setTriggerSelector(this.rel);
			
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(true);
				
				this.setSendInformator(this.sender);
				var show = $(this.getTriggerSelector())[0];
				
				this.setContentShow($(this.sender)[0].parentNode);
				this.setSendToURL(show);
				this.ajaxRun();
				
				this.addCallback({
					this:{
						reference:this,
						methods:{
							'hideModal':null
						}
					}
				});
			}
		},
		ajaxDone:function(data, action) {
			this.uber.ajaxDone(data,action);
			data=JSON.parse(data);
		//	var form=this.getForm(this.getTriggerSelector());
	//		this.setSendData(form);
			this.showStatusMessage(data);
			
			//hide deleted photo
			$(this.getContentShow()).hide('slow');
			

		},
		showStatusMessage:function(data){
			$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
		},
		hideModal:function(){
			var content = $('#AccessModal>#ContentModal');
			modal = $(content).parent().modal('hide');
		}
	};
	strz_Ajax.Extend(strz_Ajax.DoAction, strz_Ajax.NodeAction);
})();