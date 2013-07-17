(function(){
	strz_Ajax.UserIndex=function(){
		this.init();
	//	this.rel='index';
	//	this.reload=false;
	//	this.setContentShow('header+.container-fluid');
	};
	strz_Ajax.UserIndex.prototype={
		run:function(){
			this.setAllowedPages(['/moj-klub/user', '/moj-klub/index.php/user']);
			if(this.isAllowedLocation(document.location.href)){
				this.setCallbackMyself(false);
				this.setTriggerSelector('a[rel=user_index]');
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);//$(a.getTriggerSelector())[0].href
				this.setContentShow('header+.container-fluid');
				this.ajaxRun();
	
	
				this.logout=new strz_Ajax.Anchor('logout', 'header+.container-fluid', false);//'header+.container-fluid'
				this.logout.run();
	
				/*
				 * 			this.linkChange=new strz_Ajax.Link();
			this.linkChange.set({
				'trigger':'a[rel=user_change-data]',
				'info':'a[rel=user_change-data]',
				'response':'a[rel=user_change-data]'
			});
			this.linkChange.init();
			
				 */
				
				this.popover=new strz_Ajax.Component({
					trigger:'button.btn[data-toggle=popover]',
					component:'popover',
					params:{
						trigger:'hover',
						delay: { show: 500, hide: 100 }
					},
					init:true
				});
				
				this.addCallback({
					logout:{
						reference:this.logout,
						methods:{
							'run':[]
						}
					},
					popover:{
						reference:this.popover,
						methods:{
							'init':[]
						}
					}
				});
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.UserIndex, strz_Ajax.Anchor);
})();