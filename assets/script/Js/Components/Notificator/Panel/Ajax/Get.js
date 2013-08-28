(function() {
	strz_Ajax.NotificatorPanelAjaxGet = function(){
		this.init();
	};
	strz_Ajax.NotificatorPanelAjaxGet.prototype = {
		run:function(){	
			this.setTriggerSelector('a[rel=notification-icon]');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(false);
				this.setEventName('click');
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('');
				this.ajaxRun();
	
	
			//	var form=new strz_Ajax.Post();
				//form.ajaxRun();
	
			/*	this.addCallback({
					form:{
						reference:form,
						methods:{
							'run':[],
						//	'ajaxRun':[]
						}
					}
				});*/
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxGet, strz_Ajax.NodeAction);
})();