(function(){
	strz_Ajax.Capitan=function(){
		
	};
	strz_Ajax.Capitan.prototype={
		roleTeam : null,
		
		run:function(){		
			/**
			 * Initialize Roles for Capitan's team
			 */
			this.roleTeam = new strz_Ajax.RolesCapitanTeam();

		}
	};
	strz_Ajax.Extend(strz_Ajax.Capitan, strz_Ajax.NodePermissionAction);
})();