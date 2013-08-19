(function(){
	strz_Ajax.RolesCapitanTeam = function(){
	};
	strz_Ajax.RolesCapitanTeam.prototype = {
		run : function() {
			//inherit also players role for team
			var player = strz_Ajax.Factory.constructor('Player');
			player.run();
			//player have no role team
	//		player.roleTeam.run();
			
			//get all options
			this.formGetterChange=new strz_Ajax.GetFormChange('change_form_get');
			this.formGetterChange.run();
			
			//add more roles
			this.formGetterChangeTraining=new strz_Ajax.GetFormChange('change_training_form_get');
			this.formGetterChangeTraining.run();
		}
	};
	strz_Ajax.Extend(strz_Ajax.RolesCapitanTeam, strz_Ajax.NodePermissionAction);
})();