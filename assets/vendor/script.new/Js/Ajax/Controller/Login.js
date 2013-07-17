(function(){
	strz_Ajax.Login=function(){
		
	};
	strz_Ajax.Login.prototype={
		run:function(){			
			this.logout=new strz_Ajax.Anchor('logout', 'header+.container-fluid', false);//'header+.container-fluid'
			this.logout.run();
			this.carousel=new strz_Ajax.Component({
				trigger:'#overviewCarousel',
				component:'carousel',
				init:true
			});
			
			this.index=new strz_Ajax.Index();
			this.index.setAllowedPages(['/moj-klub/', '/moj-klub/index.php', '/moj-klub/index.php/']);
			this.index.run();

			this.index.addCallback({
				carousel:{
					reference:this.carousel,
					methods:{
						'init':{}
					}
				}
			});
			
			this.userIndex=new strz_Ajax.UserIndex();
			this.userIndex.run();
		}
	};
	strz_Ajax.Extend(strz_Ajax.Login, strz_Ajax.NodePermissionAction);
})();