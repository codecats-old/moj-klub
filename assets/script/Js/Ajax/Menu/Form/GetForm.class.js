(function() {
	strz_Ajax.GetForm = function(rel, fieldShow){
		this.init();
		this.rel=rel;
		this.setContentShow(fieldShow);
	};
	strz_Ajax.GetForm.prototype = {
		run:function(){

			this.setTriggerSelector('a[rel='+this.rel+']');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(false);
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.ajaxRun();
	
				var relSubmit=this.rel.replace('_get','');
				var form=new strz_Ajax.Submit(relSubmit);
	
				this.addCallback({
					this:{
						reference:this,
						methods:{
							'closeForm':null
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
		closeForm:function(){
			var content=this.getContentShow();
			$('a[rel=form_close]').click(function(eve){
				eve.preventDefault();
				$(content).children().fadeOut('slow');
			});
		}
	};
	strz_Ajax.Extend(strz_Ajax.GetForm, strz_Ajax.NodeAction);
})();