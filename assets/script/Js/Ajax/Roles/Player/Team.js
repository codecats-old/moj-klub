(function(){
	strz_Ajax.RolesPlayerTeam = function(){
		
	};
	strz_Ajax.RolesPlayerTeam.prototype={
		run:function(){
			
			this.formGetter = new strz_Ajax.GetFormChange('manage_form_get');
			this.formGetter.run();
		}
	};
	strz_Ajax.Extend(strz_Ajax.RolesPlayerTeam, strz_Ajax.NodePermissionAction);
})();