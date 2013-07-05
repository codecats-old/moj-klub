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
			
			this.submit_registrate=new strz_Ajax.Submit('registrate_form');
			this.submit_registrate.init();
			this.index.setCallback([[this.submit_registrate, 'init']]);
			this.registrate.setCallback([[this.submit_registrate, 'init']]);
		//	submit_registrate.setCallback([[submit_registrate, 'init']]);
		},
	};
	strz_Ajax.Extend(strz_Ajax.Content, strz_Ajax.NodePermissionAction);
})();