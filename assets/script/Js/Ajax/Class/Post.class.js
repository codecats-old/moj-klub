(function() {
	strz_Ajax.Post = function(){
		this.init();
	};
	strz_Ajax.Post.prototype = {
		run:function(){			

			
			this.setTriggerSelector('input[rel=submit_form]');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(true);
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL('./view/getView.php');
				this.setContentShow('div#contentTest');
				this.setSendData('form');
				this.ajaxRun();
	
				var view=new strz_Ajax.Get();
			//	view.ajaxRun();
				
				this.addCallback({
					view:{
						reference:view,
						methods:{
							'run':[],
					//		'ajaxRun':[]
						}
					}
				});
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.Post, strz_Ajax.NodeAction);
})();