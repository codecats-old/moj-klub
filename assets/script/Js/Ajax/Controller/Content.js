(function(){
	strz_Ajax.Content=function(rel){
		
	};
	/**
	 * extendable container
	 */
	strz_Ajax.Content.prototype={
		init:function(){
			var index=new strz_Ajax.Index();
			index.init();
			var registrate=new strz_Ajax.Access('registrate');
			registrate.init();
		},
		isAllowedPage:function(){
			return true;
		}
	};
	strz_Ajax.Extend(strz_Ajax.Content, strz_Ajax.NodePermissionAction);
})();