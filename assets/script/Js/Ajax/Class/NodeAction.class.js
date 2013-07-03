(function(){
	strz_Ajax.NodeAction=function(){
	};
	/**
	 * extendable container
	 */
	strz_Ajax.NodeAction.prototype={
			init:function(){
				this.initClick();
			},
			/**
			 * public function: jQuery on click ajax request will be send, 
			 * on recive display status
			 */
			initClick:function(){console.log(this);
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
				var selector=this.getTrigger();
				selector.unbind('click');//prevent double ajax send e.g. in ajax request
				selector.click(function(event){
					event.preventDefault();
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
					    	setBeforeSend(that);
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
			setBeforeSendAjax:function(that){
				var here=that.getSendInformator();
				here.fadeOut('fast');
			},
			getMethodType:function(){
				return null;
			},
			onDone:function(self, data, that){
			}
			
	};
	strz_Ajax.Extend(strz_Ajax.NodeAction, strz_Ajax.NodePermissionAction);
})();