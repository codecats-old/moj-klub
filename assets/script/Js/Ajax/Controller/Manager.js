(function(){
	strz_Ajax.Manager=function(){
		
	};
	strz_Ajax.Manager.prototype={
		roleGallery : null,
		roleTeam	: null,
		
		run:function(){
			console.log('run');
			//component initializator for gallery
			this.roleGallery = new strz_Ajax.RolesManagerGallery();
			this.roleGallery.run();
			
			//manager team role initializator
			this.roleTeam = new strz_Ajax.RolesManagerTeam();
			this.roleTeam.run();

		}
	};
	strz_Ajax.Extend(strz_Ajax.Manager, strz_Ajax.NodePermissionAction);
})();