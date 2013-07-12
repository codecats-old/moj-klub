(function(){
	strz_Ajax.Component=function(obj){
		if(obj)this.set(obj);
	}
	strz_Ajax.Component.prototype={
		triggerName:null,
		setTriggerName:function(trigger){
			this.triggerName=trigger;
		},
		getTriggerName:function(){
			return this.triggerName;
		},
		componentName:null,
		setComponentName:function(name){
			this.componentName=name;
		},
		getComponentName:function(){
			return this.componentName;
		},
		params:null,
		setParams:function(params){
			this.params=params;
		},
		getParams:function(){
			return this.params;
		},
		init:function(){
			var tr=this.getTriggerName();
			var component=this.getComponentName();
			var params=this.getParams();
			$(tr)[component](params);
		},
		set:function(obj){
			console.log(obj);
			this.setTriggerName(obj['trigger']);
			this.setComponentName(obj['component']);
			this.setParams(obj['params']);
			if(obj['init']===true)this.init();
		}
	}
})();