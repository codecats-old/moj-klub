(function(){
	strz_Ajax.UserIndex=function(){
		this.init();

	};
	strz_Ajax.UserIndex.prototype={
		run:function(){
			var baseDir = strz_Ajax.Http.getSecoundLevel();
			var indexNameAndSeparator = strz_Ajax.Http.getIndexName(true);
			
			this.setAllowedPages([baseDir + 'user', baseDir + indexNameAndSeparator + 'user']);
			if(this.isAllowedLocation(document.location.href)){

				this.setCallbackMyself(true);
				this.setTriggerSelector('[rel=user_index]');
				
			
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);//$(a.getTriggerSelector())[0].href
				this.setContentShow('header+.container-fluid');
				this.ajaxRun();
	
	
				this.logout=new strz_Ajax.Anchor('logout', 'header+.container-fluid', false);//'header+.container-fluid'
				this.logout.run();
	
				this.linkChangeData=new strz_Ajax.GetForm('user_change-data_get', 'div[rel=user_form]');
				this.linkChangeData.run();
				this.linkChangePass=new strz_Ajax.GetForm('user_change-password_get', 'div[rel=user_form]');
				this.linkChangePass.run();
				this.linkChangeAvatar=new strz_Ajax.GetForm('user_change-avatar_get', 'div[rel=user_form]');
				this.linkChangeAvatar.run();

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
					},
					linkChangeData:{
						reference:this.linkChangeData,
						methods:{
							'run':[]
						}
					},
					linkChangePass:{
						reference:this.linkChangePass,
						methods:{
							'run':[]
						}
					},
					linkChangeAvatar:{
						reference:this.linkChangeAvatar,
						methods:{
							'run':[]
						}
					}
				});
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.UserIndex, strz_Ajax.Anchor);
})();