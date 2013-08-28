/**
 * source: 
 *  https://bitbucket.org/CodeCats/canvasconsole/src/5cfc75c3b4afbd8fdef0357436fb61dd8ab0d3b1/assets/script/Js/Class/CanvasConsole/Lib/Node.js?at=master
 * 
 * @returns {undefined}
 */
'use strict';
(function(){
    strz_Ajax.Panel = function (obj) {
    	var self = this;
    	var __construct = function(obj) {}
    	__construct(obj);
    };
    strz_Ajax.Panel.prototype = {
        
    	requestor : null,
    		
    	init : function() {
    		this.requestor = new strz_Ajax.NotificatorPanelAjaxGet();
    		this.requestor.run();
    	},
   



        _get : function(attribute) {
            return this.attrs[attribute];
        },
        _set : function(attribute, value) {
            this.attrs[attribute] = value;
        },
        _initAttrs : function(obj) {
            for (var i in obj)this._set(i, obj[i]);
        }
    };
    // ROOT element
})();