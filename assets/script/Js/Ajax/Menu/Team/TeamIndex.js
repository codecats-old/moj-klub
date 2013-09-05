(function(){
	strz_Ajax.TeamIndex=function(){
		this.init();
	};
	strz_Ajax.TeamIndex.prototype={
		run:function(){
			var baseDir = strz_Ajax.Http.getSecoundLevel();
			var indexNameAndSeparator = strz_Ajax.Http.getIndexName(true);
			
			this.setAllowedPages([baseDir + 'team', baseDir + indexNameAndSeparator + 'team']);
			
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
				
				/*
				 * Object will be created only if Factory has access table roles for this object
				 */
				
				var orders = strz_Ajax.Factory.getObjects();
				
				for (var i in orders) {
					var name = orders[i];
					this['controller '+name] = strz_Ajax.Factory.create(name);
				
					if (typeof(this['controller '+name]) !== 'undefined') {
						this['controller '+name].run();
						this.addCallback({
							name : {
								reference : this['controller '+name].roleTeam,
								methods : {
									'run' : null
								}
							}
						});
					}
				}
				
		/*		this.capitan = strz_Ajax.Factory.create('Capitan');
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
				}*/
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.TeamIndex, strz_Ajax.Anchor);
})();