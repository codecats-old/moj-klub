(function() {
	strz_Ajax.GetConfirm = function(rel){
		this.init();
		//rel is sender no
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
	
			
				var confirm=new strz_Ajax.DoAction('a[rel=confirm_action]', 'a[sender='+this.rel+']');
	
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
						confirm:{
							reference : confirm,
							methods : {
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
	strz_Ajax.Extend(strz_Ajax.GetConfirm, strz_Ajax.NodeAction);
})();