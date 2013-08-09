(function() {
	strz_Ajax.GetConfirm = function(rel){
		this.init();
		this.rel=rel;
	};
	strz_Ajax.GetConfirm.prototype = {
		run:function(){

			this.setTriggerSelector('a[sender='+this.rel+']');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(false);
				var id = this.rel;
				
				this.setSendInformator('a[sender='+this.rel+']');
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('#AccessModal>#ContentModal');
				this.ajaxRun();
	
			//	var relSubmit=this.rel.replace('_get','');
		//		var form=new strz_Ajax.Submit(relSubmit);
	
				this.addCallback({

						this:{
							reference:this,
							methods:{
								'showModal':null
							}
						},
				/*	form:{
						reference:form,
						methods:{
							'run':[],
						}
					}*/
				});
			}
		},
		showModal:function(){
			var content=this.getContentShow();
			modal=$(content).parent().modal('show');
		}
	};
	strz_Ajax.Extend(strz_Ajax.GetConfirm, strz_Ajax.NodeAction);
})();