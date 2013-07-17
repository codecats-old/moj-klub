(function(){
	strz_Ajax.NodeBasicAction=function(){
		this.__init();
	};
	strz_Ajax.NodeBasicAction.prototype={
		/**
		 * all objects have to be deep copy to separate __properties form other 
		 * 	instances of NodeBasicAction
		 * a=new strz_Ajax.NodeBasicAction();
		 * b=new strz_Ajax.NodeBasicAction();
		 * a,b has they own containers (__properties).
		 */
		__init:function(){
			for(element in this){
				if(typeof(this[element])=='object'){
					if(element!='uber')this[element]=strz_Ajax.DeepExtend(this[element]);
				}
			}
		},
		__properties:{
			eventName:'click',
			triggerSelector:null,
			sendInformator:null,
			contentShow:null,
			sendToURL:null,
			sendData:null,
			contentError:'header+.container-fluid'
		},
		__set:function(name, value){
			if(typeof(this.__properties[name])==='undefined')throw ('property: '+name+', undefined');
			this.__properties[name]=value;
			return this;
		},
		__get:function(name){
			if(typeof(this.__properties[name])==='undefined')throw ('property: '+name+', undefined');
			return this.__properties[name];
		},
		setEventName:function(event){
			return this.__set('eventName', event);
		},
		getEventName:function(){
			return this.__get('eventName');
		},
		/**
		 * trigger which sending ajax request
		 */
		setTriggerSelector:function(relLink){
			return this.__set('triggerSelector', relLink);
		},
		getTriggerSelector:function(){
			return this.__get('triggerSelector');
		},
		/**
		 * field where ajax status can be shown before send request
		 */
		setSendInformator:function(element){
			return this.__set('sendInformator', element);
		},
		getSendInformator:function(){
			return this.__get('sendInformator');
		},
		/**
		 * field to put ajax serwer anser
		 */
		setContentShow:function(element){
			return this.__set('contentShow', element);
		},
		getContentShow:function(){
			return this.__get('contentShow');
		},
		/**
		 * address where ajax request have to be send
		 */
		setSendToURL:function(url){
			return this.__set('sendToURL', url);
		},
		getSendToURL:function(){
			return this.__get('sendToURL');
		},
		/**
		 * field to put ajax error answer
		 */
		setContentError:function(element){
			return this.__set('contentError', element);
		},
		getContentError:function(){
			return this.__get('contentError');
		},
		/**
		 * field where to look for inputs to send with request
		 */
		setSendData:function(element){
			return this.__set('sendData', element);
		},
		getSendData:function(){
			return this.__get('sendData');
		}
	};
})();