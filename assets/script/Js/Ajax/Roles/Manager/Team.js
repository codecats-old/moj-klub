(function(){
	strz_Ajax.RolesManagerTeam = function(){
		
	};
	strz_Ajax.RolesManagerTeam.prototype={
		run:function(){
			
			//capitan role
			var coach = strz_Ajax.Factory.constructor('Coach');
			coach.run();
			coach.roleTeam.run();
			
			//description
			this.formGetterChangeDescription=new strz_Ajax.GetFormChange('change_description_form_get');
			this.formGetterChangeDescription.run();
			
			//contact
			this.formGetterChangeContact=new strz_Ajax.GetFormChange('change_contact_form_get');
			this.formGetterChangeContact.run();
			
			//address
			this.formGetterChangeAddress=new strz_Ajax.GetFormChange('change_address_form_get');
			this.formGetterChangeAddress.run();
			
			//name
			this.formGetterChangeName=new strz_Ajax.GetFormChange('change_name_form_get');
			this.formGetterChangeName.run();
			

		}
	};
	strz_Ajax.Extend(strz_Ajax.RolesManagerTeam, strz_Ajax.NodePermissionAction);
})();