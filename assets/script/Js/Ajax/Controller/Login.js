(function(){
	strz_Ajax.Login=function(){
		
	};
	strz_Ajax.Login.prototype={
		run:function(){			
			this.logout=new strz_Ajax.Anchor('logout', 'header+.container-fluid', false);
			this.logout.run();

			
			this.index=new strz_Ajax.Index();
			this.index.run();
			
			this.userIndex=new strz_Ajax.UserIndex();
			this.userIndex.run();
			
			this.teamIndex=new strz_Ajax.TeamIndex();
			this.teamIndex.run();
			
			this.galleryIndex=new strz_Ajax.GalleryIndex();
			this.galleryIndex.run();
			
			/**
			 * Notificator avalaibe always in login context
			 */
			var notificatorComponent = new strz_Ajax.Notificator();
		}
	};
	strz_Ajax.Extend(strz_Ajax.Login, strz_Ajax.NodePermissionAction);
})();