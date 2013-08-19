(function(){
	strz_Ajax.RolesCoachTeam = function(){
		
	};
	strz_Ajax.RolesCoachTeam.prototype={
		run:function(){
			
			//inherit also coach role for team
			var capitan = strz_Ajax.Factory.constructor('Capitan');
			capitan.run();
			capitan.roleTeam.run();
			
			//change success status
			this.formGetterChangeSuccess=new strz_Ajax.GetFormChange('change_success_form_get');
			this.formGetterChangeSuccess.run();
		}
	};
	strz_Ajax.Extend(strz_Ajax.RolesCoachTeam, strz_Ajax.NodePermissionAction);
})();