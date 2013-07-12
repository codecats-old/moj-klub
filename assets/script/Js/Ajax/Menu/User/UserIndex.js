(function(){
	strz_Ajax.UserIndex=function(rel){
		rel= (typeof rel!=='undefined')? rel :'user_index';
		this.setTrigger($('a[rel='+rel+']'));
		this.setSendInformator($('header+.container-fluid'));
		this.setContentShow($('header+.container-fluid'));
		this.setAllowedPages(['/moj-klub/user', '/moj-klub/index.php/user']);
		this.setCallback();
	};
	/**
	 * extendable container
	 */
	strz_Ajax.UserIndex.prototype={
			
		setCallback:function(){
			this.popover=new strz_Ajax.Component({
				trigger:'button.btn[data-toggle=popover]',
				component:'popover',
				params:{
					trigger:'hover',
					delay: { show: 500, hide: 100 }
				},
				init:true
			});
			this.linkLogout=new strz_Ajax.Link();
			this.linkLogout.set({
				'trigger':'a[rel=user_change-data]',
				'info':'a[rel=user_change-data]',
				'response':'a[rel=user_change-data]'
			});
			this.linkLogout.init();
			
			
			this.uber.setCallback([[this.popover, 'init']]);
		}
	};
	strz_Ajax.Extend(strz_Ajax.UserIndex, strz_Ajax.ViewGetAction);
})();