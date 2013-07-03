(function(){
	strz_Ajax.PostAction=function(){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.PostAction.prototype={
			addToUnserializedData:function(serialized, objectToAdd, objectName){
				var data={};
				if(serialized)data=JSON.parse(serialized);
				data[objectName]=objectToAdd;
				return JSON.stringify(data);
			},
			/**
			 * public function: jQuery on click ajax request will be send, 
			 * on recive display status
			 */
			initClick:function(serializedData){
				var allowInit=this.isAllowedPage(document.location.pathname);
				if(allowInit){
					serializedData=this.getSerializedData(serializedData);
					this.initAjaxjQuery(serializedData);
				}
			},
			getMethodType:function(){
				return 'POST';
			},
			getSerializedData:function(serializedData){
				serializedData=(serializedData||{});
				return serializedData;
			}
	};
	strz_Ajax.Extend(strz_Ajax.PostAction, strz_Ajax.NodeAction);
})();