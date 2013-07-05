(function(){
	strz_Ajax.NodePermissionAction=function(){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.NodePermissionAction.prototype={
			refreshSelector:function(obj){
				if(obj.getTrigger)obj.setTrigger($(obj.getTrigger().selector));
			/*	if(obj.getSendInformator)obj.setSendInformator($(obj.getSendInformator().selector));
				if(obj.getDataToSend)obj.setDataToSend($(obj.getDataToSend().selector));
				if(obj.getContentToShow)obj.setContentToShow($(obj.getContentToShow().selector));
				console.log('form not refresh');*/
			},
			callbackArray:[],
			setCallback:function(array){
				for(arr in array){
					this.callbackArray.push(array[arr]);
				}
			},
			runCallback:function(that){
				for(arr in that.callbackArray){
					var obj=that.callbackArray[arr][0];
					var func=that.callbackArray[arr][1];
					if(obj){
						if(func=='init')that.refreshSelector(obj);//find trigger from beginning (testing on init);
						obj[func]();
					}
				}
				if(that.callbackObj)that.callbackObj[that.callbackFunc]();
			},
			
			allowedPages:[],
			setAllowedPages:function(pages){
				this.allowedPages=pages;
			},
			isAllowedPage:function(action){
				if(this.allowedPages.length===0)return true;
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