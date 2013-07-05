(function(){
	strz_Ajax.Access=function(rel){
		this.setTrigger($('a[rel='+rel+']'));
		this.setSendInformator($('header+.container-fluid'));
		this.setContentShow($('header+.container-fluid'));
		this.setAllowedPages([rel]);
	};
	/**
	 * extendable container
	 */
	strz_Ajax.Access.prototype={name:'Access',
		/*init:function(){
			this.initClick();
		}*/
	};
	strz_Ajax.Extend(strz_Ajax.Access, strz_Ajax.ViewGetAction);
})();