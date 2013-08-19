(function(){
	strz_Ajax.Manager=function(){
		
	};
	strz_Ajax.Manager.prototype={
		run:function(){
			
			//form to upload photos to gallery
			this.linkAddPhoto=new strz_Ajax.GetForm('gallery_add_get', 'div[rel=gallery_form]');
		this.linkAddPhoto.run();
			

		/*	this.formGetter=new strz_Ajax.GetFormRegistrate('registrate_form_get');
			this.formGetter.run();

			this.login=new strz_Ajax.Submit('quick_login_form');
			this.login.run();

			this.carousel=new strz_Ajax.Component({
				trigger:'#overviewCarousel',
				component:'carousel',
				init : true
			});*/
			/*	
			this.index=new strz_Ajax.Index();
			this.index.setAllowedPages(['/moj-klub/', '/moj-klub/index.php', '/moj-klub/index.php/']);
			this.index.run();

			this.index.addCallback({
				formGetter:{
					reference:this.formGetter,
					methods:{
						'run':[]
					}
				},
				login:{
					reference:this.login,
					methods:{
						'run':[]
					}
				},
				carousel:{
					reference:this.carousel,
					methods:{
						'init':[]
					}
				}
			});
	*/
		}
	};
	strz_Ajax.Extend(strz_Ajax.Manager, strz_Ajax.NodePermissionAction);
})();