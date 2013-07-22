(function() {
	strz_Ajax.NodeAction = function() {
		this.init();
	};
	strz_Ajax.NodeAction.prototype = {
		init:function(){
			this.__init();
		},
		setProperties:function(properties){
			for(prop in properties){
				this.__set(prop, properties[prop]);
			}
		},
		run:function(){
			
		},
		ajaxDone:function(data, action) {
			data=JSON.parse(data);
			var show=action.getContentShow();
			
			$(show).html(data.View);
			$(show).fadeTo('fast',.1);
			$(show).fadeTo('fast',1);
		},
		ajaxBeforeSend:function(action){
			var info=action.getSendInformator();
			$(info).addClass('ajax-load');
		},
		ajaxError:function(err, action) {
			console.log(err);
			switch (err.status) {
				case 403:
					console.log('just login error');
				default:
					var content=action.getContentError();
					$(content).html(err.responseText);
					break;
			}
		},
		ajaxAlways:function(action){
			var info=action.getSendInformator();
			if($(info).length>0){
				$(info).removeClass('ajax-load');
				
			}
		},
		ajaxRun:function(){
			if(this.isAllowedLocation(document.location.pathname)){
				var trig=this.getTriggerSelector();
				if(typeof(trig)!=='undefined'&&$(trig).length>0){
					this.ajaxSetReady();
				}
			}
		},
		ajaxProperties:{
			type : null,
			data : null,
			url : null,
			cache : false,
			error : null,
			beforeSend : null
		},
		ajaxInitProperties:function(){
			this.ajaxProperties['error']=this.ajaxError;
			this.ajaxProperties['url']=this.getSendToURL();
			this.ajaxProperties['beforeSend']=this.ajaxBeforeSend;
			this.ajaxProperties['type']=this.getSendType();
			this.ajaxProperties['data']=this.getSendData();
		},
		ajaxInitialize:function(){
			var action=this;
			this.ajaxInitProperties();
			var prop={
				type : action.ajaxProperties['type'],
				url : action.ajaxProperties['url'],
				cache : action.ajaxProperties['cache'],
				error : function(err){action.ajaxProperties['error'](err, action)},
				beforeSend : function(){action.ajaxProperties['beforeSend'](action)},
				data:$(action.ajaxProperties['data']).serialize()
			};
			$.ajax(prop)
			.done(function(data) {
				action.ajaxDone(data, action);
				if(action.isCallbackMyself()===true)action.ajaxRun();
				action.runCallbacks();
			})
			.always(function(){	
				action.ajaxAlways(action);
			});
		},
		ajaxSetReady:function(){
			var action=this;	
			var trig=this.getTriggerSelector();
			var eventTrigger=this.getEventName();
			$(trig).unbind(eventTrigger);// prevent double ajax send e.g. in ajax
		//	var DEBUGGING=true;
			if(typeof(DEBUGGING)!='undefined'){
				/*debug*/
				console.log(trig);
				console.log(action);
				$(trig).append('*');
				$(trig).val($(trig).val()+'*');
				setTimeout(function(){
					try{
						$(trig).html($(trig).html().replace('*',''));
						$(trig).val($(trig).val().replace('*',''));
					}catch(err){
						console.log('element not exist');
					}
				},1000);
				/*>debug*/
			}
			$(trig)[eventTrigger](function(event){
				event.preventDefault();
				action.ajaxInitialize();
			});
		},
		getSendType : function() {
			return ($(this.getSendData()).serialize())?'POST':'GET';
		}
	};
	strz_Ajax.Extend(strz_Ajax.NodeAction, strz_Ajax.NodePermissionAction);
})();