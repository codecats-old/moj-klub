(function(){
	strz_Ajax.GalleryIndex=function(){
		this.init();
	};
	strz_Ajax.GalleryIndex.prototype={
		run:function(){
			this.setAllowedPages(['/moj-klub/gallery', '/moj-klub/index.php/gallery']);
			if(this.isAllowedLocation(document.location.href)){
				/**
				 * Refresh Gallery Index
				 */
				/* No index callbacks because gallery not adapt height
				this.setCallbackMyself(true);
				this.setTriggerSelector('[rel=gallery_index]');
				
			
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);//$(a.getTriggerSelector())[0].href
				this.setContentShow('#component_about');
				this.ajaxRun();
				*/
				///
				

				
			
				this.gallery=new strz_Ajax.Component({
					trigger:'#gallery-container',
					component:'sGallery',
					params:{
						fullScreenEnabled: true
					},
					init : true
				});

				
				//TODO: index behavior so callbacks are needed
				this.addCallback({
					gallery : {
						reference : this.gallery,
						methods : {
							'init' : {}
						}
					},
				});
				this.manager = strz_Ajax.Factory.create('Manager');
				if(typeof(this.manager) !== 'undefined')this.manager.run();
				
				if(typeof(this.manager) !== 'undefined'){
					this.addCallback({
						managerGallery : {
							reference : this.manager.roleGallery,
							methods : {
								'run' : null
							}
						}
					});
				}
				
				
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.GalleryIndex, strz_Ajax.Anchor);
})();