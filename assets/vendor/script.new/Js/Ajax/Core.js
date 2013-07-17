/**
 * namespace and extending function
 */
var strz_Ajax={};
(function(){
	strz_Ajax.Extend=function(child, parent, deep){
		deep=(typeof(deep)=='undefined')?false:true;
		for(var i in parent.prototype){
			if(!(i in child.prototype)){
				
				if(deep===true){
					child.prototype[i]=strz_Ajax.DeepExtend(parent.prototype[i]);
				}else{
					child.prototype[i]=parent.prototype[i];
				}
			}
		}
		child.prototype.uber=parent.prototype;
	};
	strz_Ajax.DeepExtend=function(obj){
		if(obj==null || typeof(obj)!='object')return obj;
		
		var temp=obj.constructor();
		for(var k in obj)temp[k]=strz_Ajax.DeepExtend(obj[k]);
		return temp;
	}
})();