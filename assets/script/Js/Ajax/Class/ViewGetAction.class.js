(function(){
	strz_Ajax.ViewGetAction=function(rel){
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		};
	};
	/**
	 * extendable container
	 */
	strz_Ajax.ViewGetAction.prototype={
		onDone:function(self, dataView, that){

			$('header+.container-fluid').html(dataView);
		}
	};
	strz_Ajax.Extend(strz_Ajax.ViewGetAction, strz_Ajax.GetAction);
})();