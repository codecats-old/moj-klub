(function(){
	strz_Ajax.Content=function(rel){
		
	};
	/**
	 * extendable container
	 */
	strz_Ajax.Content.prototype={
		init:function(){
			this.index=new strz_Ajax.Index();
			this.index.init();
			this.registrate=new strz_Ajax.Access('registrate');
			this.registrate.init();	

			this.getRegistrate=new strz_Ajax.GetForm('registrate_form_get');
			this.getRegistrate.init();
			
			this.submitQuickLogin=new strz_Ajax.SubmitOnId('quick_login_form');
			this.submitQuickLogin.init();
		//	this.submit_login=new strz_Ajax.GetForm('login_form');
		//	this.submit_login.init();
			this.carousel=new strz_Ajax.Component({
				trigger:'#overviewCarousel',
				component:'carousel',
				init:true
			});

			this.index.setCallback([
			                        [this.getRegistrate, 'init'],
			                        [this.submitQuickLogin, 'init'],
			                        [this.carousel, 'init']
			                        ]);
			this.registrate.setCallback([
			                             [this.getRegistrate, 'init']
			                             ]);
	
		},
	};
	strz_Ajax.Extend(strz_Ajax.Content, strz_Ajax.NodePermissionAction);
})();