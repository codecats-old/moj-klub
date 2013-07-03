/**
 * namespace and extending function
 */
var strz_Bookmark={};
(function(){
	strz_Bookmark.Extend=function(child, parent){
		for(var i in parent.prototype){
			if(!(i in child.prototype)){
				child.prototype[i]=parent.prototype[i];
			}
		}
		child.prototype.uber=parent.prototype;
	};
})();