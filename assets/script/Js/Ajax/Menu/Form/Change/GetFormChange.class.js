(function() {
	strz_Ajax.GetFormChange = function(rel){
		this.init();
		this.rel=rel;
	};
	strz_Ajax.GetFormChange.prototype = {
		run:function(){
			this.setTriggerSelector('a[rel='+this.rel+']');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(false);
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('#AccessModal>#ContentModal');
				this.ajaxRun();
	
				var relSubmit = this.clearAction(this.rel);
				var form=new strz_Ajax.SubmitChange(relSubmit);
	
				this.addCallback({
					this:{
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
		/*
		 * Submit trigger is for all action in suitable type, not for specific id
		 * ex. change_email_form_get => change_form
		 * 	but details is not needed
		 * change_email_form_get = X > change_email_form
		 */
		clearAction : function(rel){
			var arr = rel.split('_');
			var res = [];
			res.push( arr[0] );
			res.push( arr[arr.length -2] );
			return res.join('_');
		},
		showModal:function(){
			var content=this.getContentShow();
			modal=$(content).parent().modal('show');
		}
	};
	strz_Ajax.Extend(strz_Ajax.GetFormChange, strz_Ajax.NodeAction);
})();