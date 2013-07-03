(function(){
	strz_Ajax.NodeAction=function(){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.NodeAction.prototype={name:'NodeAction',
			/**
			 * public function: jQuery on click ajax request will be send, 
			 * on recive display status
			 */
			initClick:function(){
			//	this.setAllowedPages([this.getRelLink()]);
				var allowInit=this.isAllowedPage(document.location.pathname);
				if(allowInit){
					this.initAjaxjQuery();			
				}
			},
			initAjaxjQuery:function(dataField){
				var methodType=this.getMethodType;
				var requestDone=this.onDone;
				var callbackRun=this.runCallback;
				var setBeforeSend=this.setBeforeSendAjax;
				var that=this;
				var selector=$("a[rel='"+this.getLink()+"']");
				selector.unbind('click');//prevent double ajax send e.g. in ajax request
				selector.click(function(event){
					event.preventDefault();
					var elementClicked=$(this);
					$.ajax({
						type:methodType(),
						data:dataField,
						self:$(this).parent(),
						url:this,
						cache:false,
					    error: function(err) {
					    	console.log(err);
					    	switch(err.status){
					    	case 403:
					    		console.log('just login error');
				    		default:
				    			 $('.content').html(err.responseText);
				    			break;
					    	}
					    },
					    beforeSend:function(){
					    	setBeforeSend(that, elementClicked.parent());
					    }
					}).done(function (data){
						requestDone(this.self, data, that);
						callbackRun(that);
					});
				});

			},
			/**
			 * @param {jQuery element} here
			 */
			setBeforeSendAjax:function(that, here){
				var pathServer='http://localhost/zakladnik2';
				here.prepend('<img src="'+pathServer+'/assets/img/Ajax/ajax-loader.gif" />');
			},
			getMethodType:function(){
				return null;
			},
			onDone:function(self, data, that){},
			getLink:function(){/*abstract*/
				return this.getRelLink();
			},
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
	
})();