(function(){
	strz_Ajax.RolesManagerGallery=function(){
		
	};
	strz_Ajax.RolesManagerGallery.prototype={
		run:function(){
			
			//form to upload photos to gallery
			this.linkAddPhoto=new strz_Ajax.GetForm('gallery_add_get', 'div[rel=gallery_form]');
			this.linkAddPhoto.run();
			

			/*Gallery delete photo confirm*/
			this.photos = [];
			//multiple photos so id is rel=confim_get and in this table every sender has unique id 
			for(var i=0; i<$('a[rel=confirm_get]').length; i++){
				var conf = new strz_Ajax.GetConfirm(i);
				conf.run();
				this.photos.push(conf);
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.RolesManagerGallery, strz_Ajax.NodePermissionAction);
})();