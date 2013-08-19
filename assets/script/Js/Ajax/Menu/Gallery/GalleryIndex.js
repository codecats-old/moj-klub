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
				this.setCallbackMyself(true);
				this.setTriggerSelector('[rel=gallery_index]');
				
			
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);//$(a.getTriggerSelector())[0].href
				this.setContentShow('#component_about');
				this.ajaxRun();
				///
				
				/*Move it to suitable roles*/
				/*Callbacks it */
				/*Gallery delete photo confirm*/
				this.photos = [];
				//multiple photos so id is rel=confim_get and in this table every sender has unique id 
				for(var i=0; i<$('a[rel=confirm_get]').length; i++){
					var conf = new strz_Ajax.GetConfirm(i);
					conf.run();
					this.photos.push(conf);
				}
				
				//form to upload photos to gallery
			/*	this.linkAddPhoto=new strz_Ajax.GetForm('gallery_add_get', 'div[rel=gallery_form]');
				this.linkAddPhoto.run();
			*/
				
				this.manager = strz_Ajax.Factory.create('Manager');
				if(typeof(this.manager) !== 'undefined')this.manager.run();
				
				//TODO : Confirmation
			//	this.actionConfirm = new strz_Ajax.GetConfirm('confirm_get');
			//	this.actionConfirm.run();
				
				
				this.gallery=new strz_Ajax.Component({
					trigger:'#gallery-container',
					component:'sGallery',
					params:{
						fullScreenEnabled: true
					},
					init:true
				});

				
				//TODO: index behavior so callbacks are needed
				this.addCallback({
					gallery : {
						reference : this.gallery,
						methods : {
							'init' : {}
						}
					},
					/*logout:{
						reference:this.logout,
						methods:{
							'run':[]
						}
					},
					formGetter:{
						reference:this.formGetter,
						methods:{
							'run':[]
						}
					}*/
				});
				
				if(typeof(this.manager) !== 'undefined'){
					this.addCallback({
						manager : {
							reference : this.manager,
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