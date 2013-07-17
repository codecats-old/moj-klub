(function(){
	strz_Ajax.NodePermissionAction=function(){
		this.__init();
	};
	/**
	 * extendable container
	 */
	strz_Ajax.NodePermissionAction.prototype={
		callbacks:{
			objects:{}
		},
		addCallback:function(callback){
			for(var i in callback){
				this.callbacks.objects[i]=callback[i];
			}
		},
		getCallback:function(){
			for(var i in this.callbacks.objects){
				console.log(i);
			}
		},
		runCallbacks:function(){
			for(var object in this.callbacks.objects){
				for(var method in this.callbacks.objects[object].methods){
					var arguments=this.callbacks.objects[object].methods[method];
					this.callbacks.objects[object]['reference'][method](arguments);				
				}
			}
		},
		/**
		 * TODO: if args/meth undef then run args/meth from callbacks table
		 */
		runCallback:function(obj, meth, args){
			if(typeof(meth)!='undefined'){
				if(typeof(args)!='undefined'){
					this.callbacks.objects[obj]['reference'][meth](args);
				}
			}
		},
		/**
		 * TODO: if args/meth undef then run args/meth from callbacks table
		 */
		runCallbackSelected:function(obj){
			for(var object in obj){
				for(var method in obj[object]){
					this.callbacks.objects[object]['reference'][method](obj[object][method].args);
				}
			}
		},
		callbackMyself:false,
		setCallbackMyself:function(value){
			this.callbackMyself=value;
		},
		isCallbackMyself:function(){
			return this.callbackMyself;
		},
		allowedPages:[],
		disallowedPages:[],
		setAllowedPages:function(pages){
			this.allowedPages=pages;
		},
		setDisallowedPages:function(pages){
			this.disallowedPages=pages;
		},
		isAllowedPage:function(loc){
			var pages=this.allowedPages;
			if(pages.length===0)return true;
			var allowed=false;
			for(var page in pages){
				if(loc.search(pages[page])>-1)allowed=true;
			}
			return allowed;
		},
		isDissallowedPage:function(loc){
			var pages=this.disallowedPages;
			if(pages.length===0)return false;
			var dissallowed=false;
			for(var page in pages){
				if(loc.search(pages[page])>-1)dissallowed=true;
			}
			return dissallowed;
		},
		isAllowedLocation:function(loc){
			if(this.isAllowedPage(loc)===true&&this.isDissallowedPage(loc)===false)return true;
			else return false;
		}
	};
	strz_Ajax.Extend(strz_Ajax.NodePermissionAction, strz_Ajax.NodeBasicAction, true);
})();
/**callback using
var b=new strz_Ajax.NodeBasicAction();
var perm=new strz_Ajax.NodePermissionAction();

var a=new strz_Ajax.NodeBasicAction();

	perm.addCallback({
		b:{
			reference:b,
			methods:{
				'setEventName':{
					args:'arg'
				},
				'getEventName':{}
			}
		},
		a:{
			reference:a,
			methods:{
				'setEventName':{
					args:'argA'
				},
				'getEventName':{}
			}
		}
	});
perm.runCallbacks();

perm.runCallback('b', 'setEventName', 'runCB b');
perm.runCallbackSelected({
'b':{
	'setEventName':{
		args:'runCB b'
	}
}	
});
*/