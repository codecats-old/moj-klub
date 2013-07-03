(function(){
	strz_Ajax.JSONPostAction=function(rel){
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		}
	};
	/**
	 * extendable container
	 */
	strz_Ajax.JSONPostAction.prototype={
			onDone:function(self, data, that){
				data=JSON.parse(data);
				return data;
			},			
	};
	strz_Ajax.Extend(strz_Ajax.JSONPostAction, strz_Ajax.PostAction);
})();