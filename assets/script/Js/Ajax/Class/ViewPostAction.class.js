(function(){
	strz_Ajax.ViewPostAction=function(rel){
		var relLink=rel;
		this.getRelLink=function(){
			return relLink;
		}
	};
	/**
	 * extendable container
	 */
	strz_Ajax.ViewPostAction.prototype={
			onDone:function(self, dataView){
				self[0].outerHTML=dataView;
			},
			getSerializedData:function(serializedData){
				serializedData=this.uber.getSerializedData(serializedData);
				serializedData.getView=true;//msg for server script
				return serializedData;
			},
			
	};
	strz_Ajax.Extend(strz_Ajax.ViewPostAction, strz_Ajax.PostAction);
})();