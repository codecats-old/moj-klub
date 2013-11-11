(function() {
	strz_Ajax.GetFormRegistrate = function(rel){
		this.init();
		this.rel=rel;
	};
	strz_Ajax.GetFormRegistrate.prototype = {
		run:function(){
			this.setTriggerSelector('a[rel='+this.rel+']');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(false);
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('#AccessModal>#ContentModal');
				this.ajaxRun();
	
				var relSubmit=this.rel.replace('_get','');
				var form=new strz_Ajax.SubmitRegistrate(relSubmit);
	
				/*
				 * For YUI compressor solution
				 */
				var me = this;
				this.addCallback({
					me:{
						reference:this,
						methods:{
							'showModal':null
						}
					},
					form:{
						reference:form,
						methods:{
							'run':[],
						}
					}
				});
			}
		},
		showModal:function(){
			var content=this.getContentShow();
			modal=$(content).parent().modal('show');
		}
	};
	strz_Ajax.Extend(strz_Ajax.GetFormRegistrate, strz_Ajax.NodeAction);
})();