(function() {
	strz_Ajax.NotificatorPanelAjaxMenuUser = function(listener, triggerContent) {
		this.init();
		this.listener = listener;
		this.triggerContent = triggerContent;
	};
	strz_Ajax.NotificatorPanelAjaxMenuUser.prototype = {
		listener : null,
		triggerContent : null,
		run : function(){

			this.setTriggerSelector('a[rel=notification-switch-user]');
			if($(this.getTriggerSelector()).length > 0) {
				this.setCallbackMyself(false);
				this.setEventName('click');
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('ul[rel=notification-messages]');
				this.ajaxRun();

				this.addCallback({
					switchListener : {
						reference : this,
						methods : {
							'listener' : this
						}
					}
				});
			}
			
		}
	};
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxMenuUser, strz_Ajax.NotificatorPanelAjaxGet);
})();