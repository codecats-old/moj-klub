(function(){
	strz_Ajax.NodeBasicAction=function(){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.NodeBasicAction.prototype={
		/**
		 * for example rel="trigger"
		 */
		trigger:null,
		setTrigger:function(relLink){
			this.trigger=relLink;
			return this;
		},
		getTrigger:function(){
			return this.trigger;
		},
		/**
		 * field where ajax status can be shown before send request
		 */
		sendInformator:null,
		setSendInformator:function(element){
			this.sendInformator=element;
			return this;
		},
		getSendInformator:function(){
			return this.sendInformator;
		},
		/**
		 * field where put ajax serwer anser
		 */
		contentShow:null,
		setContentShow:function(element){
			this.contentShow=element
			return this;
		},
		getContentShow:function(){
			return this.contentShow;
		}
	};
	
})();