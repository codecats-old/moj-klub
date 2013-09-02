(function() {
	strz_Ajax.NotificatorPanelAjaxGet = function(trigger) {
		this.init();
		this.getterTrigger = trigger;
	};
	strz_Ajax.NotificatorPanelAjaxGet.prototype = {
		run : function(){

			this.setTriggerSelector(this.getterTrigger);
			if($(this.getTriggerSelector()).length > 0) {
				this.setCallbackMyself(false);
				this.setEventName('click');
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('ul[rel=notification-messages]');
				this.ajaxRun();
			
			}
			
		},
		ajaxDone : function(data, action){
			data = JSON.parse(data);
			var contentShow = action.getContentShow();
			
			/**
			 * If new view content has come or info view not exists then remove old content
			 */
			if (data.View.length > 0 || ($(contentShow + '> li[sender=-1]').length === 0) )
				$(contentShow + '> li[sender]').remove();
			
		
			for (var i in data.View) {
				$(contentShow).append(data.View[i]);
			}
			
			if (data.status)
				$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
		}
	};
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxGet, strz_Ajax.NodeAction);
})();