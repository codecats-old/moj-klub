(function() {
	strz_Ajax.DoAction = function(rel, sender){
		this.init();
		
		//confirm trigger - has destination url
		this.rel=rel;
		
		//button which even started has element id
		this.sender = sender;
	};
	strz_Ajax.DoAction.prototype = {
		run:function(){			

			this.setTriggerSelector(this.rel);
			
			if($(this.getTriggerSelector()).length>0){
				//no need for reload because after action element is getting by difference class
				this.setCallbackMyself(false);
				
				//confirm form
				var show = $(this.getTriggerSelector())[0];
				this.setSendInformator(show);
				
				//parent of button id = photo
				this.setContentShow($(this.sender)[0].parentNode);
				//send address of button
				this.setSendToURL(show);
				this.ajaxRun();
				
				/*
				 * For YUI compressor solution
				 */
				var me = this;
				
				//close modal window
				this.addCallback({
					me:{
						reference:this,
						methods:{
							'hideModal':null
						}
					}
				});
			}
		},
		ajaxDone:function(data, action) {
			//Do not show result just animate
	//		this.uber.ajaxDone(data,action);
			data=JSON.parse(data);
		//	var form=this.getForm(this.getTriggerSelector());
	//		this.setSendData(form);
			this.showStatusMessage(data);
			
			//hide deleted photo
			$(this.getContentShow()).hide(2500);
			

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