(function(){
	strz_Ajax.Login=function(rel){
		
	};
	/**
	 * extendable container
	 */
	strz_Ajax.Login.prototype={
		init:function(){
			this.index=new strz_Ajax.Index();
			this.index.init();
			
			this.linkLogout=new strz_Ajax.Link();
			this.linkLogout.set({
				'trigger':'a[rel=logout]',
				'info':'a[rel=logout]',
				'response':'header+*'
			});
			this.linkLogout.init();

		},
	};
	strz_Ajax.Extend(strz_Ajax.Login, strz_Ajax.NodePermissionAction);
})();