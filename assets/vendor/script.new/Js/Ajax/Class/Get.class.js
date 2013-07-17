(function() {
	strz_Ajax.Get = function(){
		this.init();
	};
	strz_Ajax.Get.prototype = {
		run:function(){

			
			this.setTriggerSelector('a[rel=registrate_form_get]');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(true);
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('#AccessModal>#ContentModal');
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
	strz_Ajax.Extend(strz_Ajax.Get, strz_Ajax.NodeAction);
})();