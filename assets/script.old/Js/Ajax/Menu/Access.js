(function(){
	strz_Ajax.Access=function(rel){
		this.setTrigger($('a[rel='+rel+']'));
		this.setSendInformator($('header+.container-fluid div.offset4 .well'));
		this.setContentShow($('header+.container-fluid div.offset4 .well'));
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