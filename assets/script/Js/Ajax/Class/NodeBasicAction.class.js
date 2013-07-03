(function(){
	strz_Ajax.NodeBasicAction=function(){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.NodeBasicAction.prototype={
		trigger:null,
		setTrigger:function(relLink){
			this.trigger=relLink;
			return this;
		},
		getTrigger
	};
	
})();