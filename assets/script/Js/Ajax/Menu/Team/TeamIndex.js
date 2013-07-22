(function(){
	strz_Ajax.TeamIndex=function(){
		this.init();
	};
	strz_Ajax.TeamIndex.prototype={
		run:function(){
			this.setAllowedPages(['/moj-klub/team', '/moj-klub/index.php/team']);
			if(this.isAllowedLocation(document.location.href)){
			/*	this.setCallbackMyself(false);
				this.setTriggerSelector('a[rel=user_index]');
			
				this.setCallbackMyself(false);
				this.setTriggerSelector('[rel=team_index]');
			
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('header+.container-fluid');
				this.ajaxRun();*/
	
				
				this.logout=new strz_Ajax.Anchor('logout', 'header+.container-fluid', false);//'header+.container-fluid'
				this.logout.run();
	
				this.formGetter=new strz_Ajax.GetFormRegistrate('create_form_get');
				this.formGetter.run();


				
				this.addCallback({
					logout:{
						reference:this.logout,
						methods:{
							'run':[]
						}
					},
					formGetter:{
						reference:this.formGetter,
						methods:{
							'run':[]
						}
					}
				});
				
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.TeamIndex, strz_Ajax.Anchor);
})();