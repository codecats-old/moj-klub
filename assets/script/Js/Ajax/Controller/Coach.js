(function(){
	strz_Ajax.Coach=function(){
		
	};
	strz_Ajax.Coach.prototype={
		roleTeam : null,
		
		run:function(){			
			/**
			 * initialize Roles Coach's team
			 */
			this.roleTeam = new strz_Ajax.RolesCoachTeam();
		//	this.roleTeam.run();
		}
	};
	strz_Ajax.Extend(strz_Ajax.Coach, strz_Ajax.NodePermissionAction);
})();