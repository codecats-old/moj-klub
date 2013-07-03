(function(){
	strz_Ajax.NodePermissionAction=function(){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.NodePermissionAction.prototype={
			callbackObj:null,
			callbackFunc:null,
			callbackArray:[],
			setCallback:function(array){//obj, callback){
				for(arr in array){
					this.callbackArray.push(array[arr]);
				}
//				this.callbackObj=obj;
//				this.callbackFunc=callback;
			},
			runCallback:function(that){
				for(arr in that.callbackArray){
					var obj=that.callbackArray[arr][0];
					var func=that.callbackArray[arr][1];
					if(obj)obj[func]();
				}
				if(that.callbackObj)that.callbackObj[that.callbackFunc]();
			},
			allowedPages:[],
			setAllowedPages:function(pages){
				this.allowedPages=pages;
			},
			isAllowedPage:function(action){
				var allowed=false;
				var pages=this.allowedPages;
				for(var page in pages){
					if(action.search(pages[page])>-1)allowed=true;
				}
				return allowed;
			}
	};
	strz_Ajax.Extend(strz_Ajax.NodePermissionAction, strz_Ajax.NodeBasicAction);
})();