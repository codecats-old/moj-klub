(function(){
	strz_Ajax.Content=function(rel){
		rel= (typeof rel!=='undefined')? rel :'index.php';
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		};
	};
	
	/**
	 * extendable container
	 */
	strz_Ajax.Content.prototype={
		setBeforeSendAjax:function(that){
				that.uber.setBeforeSendAjax(that, $('.content'));
		},
		isAllowedPage:function(){
			return true;
		}
	};
	strz_Ajax.Extend(strz_Ajax.Content, strz_Ajax.ViewGetAction);
})();