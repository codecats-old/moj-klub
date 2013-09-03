/**
 *
 */
(function(){
    strz_Ajax.QuickAccess = function (obj){
    //	var self = this;
    //	var __construct = function(obj){}
   // 	__construct(obj);
    };
    strz_Ajax.QuickAccess.prototype = {
    	trigger 	: 'button[data-target=#quick_access]', 
    	content 	: 'div#quick_access',
    	stateName 	: 'QuickAccess.state',
    	
    	init : function() {   		
    		var content = this.content;
    		var stateName = this.stateName;
    		
    		$(this.trigger).click(function () {
    			var opened = (!$(content).hasClass('in')) ? true : false;
    			strz_Ajax.Data.save(stateName, opened);
    		});
    		
    		if (strz_Ajax.Data.load(stateName) === false) {
    			$(content).removeClass('in');
    		}
    	}
    };
    // ROOT element
})();