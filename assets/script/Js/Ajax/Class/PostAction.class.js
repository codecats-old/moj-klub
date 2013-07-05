(function(){
	strz_Ajax.PostAction=function(){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.PostAction.prototype={
			dataToSend:null,
			getDataToSend:function(){
				return this.dataToSend;
			},
			setDataToSend:function(data){
				this.dataToSend=data;
				return this;
			},
			addToUnserializedData:function(serialized, objectToAdd, objectName){
				var data={};
				if(serialized)data=JSON.parse(serialized);
				data[objectName]=objectToAdd;
				return JSON.stringify(data);
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