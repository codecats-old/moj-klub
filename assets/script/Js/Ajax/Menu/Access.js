(function(){
	strz_Ajax.Access=function(rel){
		rel= (typeof rel!=='undefined')? rel :'registrate';
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		};
	};
	
	/**
	 * extendable container
	 */
	strz_Ajax.Access.prototype={
		setBeforeSendAjax:function(that){
				that.uber.setBeforeSendAjax(that, $('.content'));
		},
		isAllowedPage:function(){
			return true;
		}
	};
	strz_Ajax.Extend(strz_Ajax.Access, strz_Ajax.ViewGetAction);
})();