(function(){
	strz_Ajax.GetAction=function(){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.GetAction.prototype={

			getMethodType:function(){
				return 'GET';
			}
	};
	strz_Ajax.Extend(strz_Ajax.GetAction, strz_Ajax.NodeAction);
})();