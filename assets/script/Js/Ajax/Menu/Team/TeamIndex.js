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
				
				/*Move it to suitable roles*/
				/*Callbacks it */
				/*Submenu change*/
				this.formGetterChangeDescription=new strz_Ajax.GetFormChange('change_description_form_get');
				this.formGetterChangeDescription.run();
				
				this.formGetterChangeTraining=new strz_Ajax.GetFormChange('change_training_form_get');
				this.formGetterChangeTraining.run();
				
				this.formGetterChangeSuccess=new strz_Ajax.GetFormChange('change_success_form_get');
				this.formGetterChangeSuccess.run();
				
				this.formGetterChangeContact=new strz_Ajax.GetFormChange('change_contact_form_get');
				this.formGetterChangeContact.run();
				
				this.formGetterChangeAddress=new strz_Ajax.GetFormChange('change_address_form_get');
				this.formGetterChangeAddress.run();
				
				this.formGetterChangeName=new strz_Ajax.GetFormChange('change_name_form_get');
				this.formGetterChangeName.run();
				
				this.formGetterChange=new strz_Ajax.GetFormChange('change_form_get');
				this.formGetterChange.run();

				/*Move it to suitable roles*/
				/*Callbacks it */
				/*Gallery delete photo confirm*/
				this.photos = [];
				//multiple photos so id is rel=confim_get and in this table every sender has unique id 
				for(var i=0; i<$('a[rel=confirm_get]').length; i++){
					var conf = new strz_Ajax.GetConfirm(i);
					conf.run();
					this.photos.push(conf);
				}
				
			//	this.actionConfirm = new strz_Ajax.GetConfirm('confirm_get');
			//	this.actionConfirm.run();
				
				
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