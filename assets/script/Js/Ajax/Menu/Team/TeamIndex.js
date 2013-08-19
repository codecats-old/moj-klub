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
	
				//'header+.container-fluid'
				this.logout=new strz_Ajax.Anchor('logout', 'header+.container-fluid', false);
				this.logout.run();
	
				this.formGetter=new strz_Ajax.GetFormRegistrate('create_form_get');
				this.formGetter.run();
				
				/*Move it to suitable roles*/
				/*Callbacks it */
				/*Submenu change*/
				//manager

				
				//capitan
	//			this.formGetterChangeTraining=new strz_Ajax.GetFormChange('change_training_form_get');
	//			this.formGetterChangeTraining.run();
				
				//coach

				

				

				

				
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
				
				
				this.capitan = strz_Ajax.Factory.create('Capitan');
				if(typeof(this.capitan) !== 'undefined')this.capitan.run();
				
				if(typeof(this.capitan) !== 'undefined'){
					this.addCallback({
						capitan : {
							reference : this.capitan.roleTeam,
							methods : {
								'run' : null
							}
						}
					});
				}
				
				
				this.manager = strz_Ajax.Factory.create('Manager');
				if(typeof(this.manager) !== 'undefined')this.manager.run();
				
				if(typeof(this.manager) !== 'undefined'){
					this.addCallback({
						manager : {
							reference : this.manager.roleTeam,
							methods : {
								'run' : null
							}
						}
					});
				}
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.TeamIndex, strz_Ajax.Anchor);
})();