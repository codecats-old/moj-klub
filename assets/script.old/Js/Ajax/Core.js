/**
 * namespace and extending function
 */
var strz_Ajax={};
(function(){
	strz_Ajax.Extend=function(child, parent){
		for(var i in parent.prototype){
			if(!(i in child.prototype)){
				child.prototype[i]=parent.prototype[i];
			}
		}
		child.prototype.uber=parent.prototype;
	};
})();