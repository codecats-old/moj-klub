(function(){
	strz_Ajax.JSONGetAction=function(rel){
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		}
	};
	/**
	 * extendable container
	 */
	strz_Ajax.JSONGetAction.prototype={name:'JSONGetAction',
		onDone:function(self, data, that){
			data=JSON.parse(data);
			return data;
		}
	};
	strz_Ajax.Extend(strz_Ajax.JSONGetAction, strz_Ajax.GetAction);
})();