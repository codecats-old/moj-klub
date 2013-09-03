(function() {
	strz_Ajax.Index = function() {
		this.init();
		this.rel = 'index';
		this.reload = false;
		this.setContentShow('header+.container-fluid');
	};
	strz_Ajax.Index.prototype = {
		run:function(){
			this.setAllowedPages(['/moj-klub/', '/moj-klub/index.php', '/moj-klub/index.php/']);

			var loc = document.location.href.replace(document.location.origin, '');
			if(this.isAllowedLocation(loc)){
				this.setCallbackMyself(true);
				this.setTriggerSelector('[rel=index]');
				
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);//$(a.getTriggerSelector())[0].href
				this.setContentShow('header+.container-fluid');
				this.ajaxRun();
				
				/**
				 * COMPONENTS
				 */
				
				/**
				 * Carousel
				 */
				this.carousel=new strz_Ajax.Component({
					trigger:'#overviewCarousel',
					component:'carousel',
					init:true
				});
				
				/**
				 * QuickAccess
				 */
				this.quickAccess = new strz_Ajax.QuickAccess();
				this.quickAccess.init();
				
				this.addCallback({
					carousel : {
						reference : this.carousel,
						methods : {
							'init' : {}
						}
					},
					quickAccess : {
						reference : this.quickAccess,
						methods : {
							'init' : {}
						}
					}
				});
			}
		},
		isAllowedPage : function(loc) {
			var allowed = false;
			var pages = this.allowedPages;
			for ( var page in pages) {			
				if (loc === pages[page])
					allowed = true;
			}
			return allowed;
		}
	};
	strz_Ajax.Extend(strz_Ajax.Index, strz_Ajax.Anchor);
})();