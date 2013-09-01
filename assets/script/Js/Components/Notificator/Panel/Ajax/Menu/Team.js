(function() {
	strz_Ajax.NotificatorPanelAjaxMenuTeam = function(listener) {
		this.init();
		this.listener = listener;

	};
	strz_Ajax.NotificatorPanelAjaxMenuTeam.prototype = {
		listener : null,
		run : function(){

			this.setTriggerSelector('a[rel=notification-switch-team]');
			if($(this.getTriggerSelector()).length > 0) {
				this.setCallbackMyself(false);
				this.setEventName('click');
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('ul[rel=notification-messages]');
				this.ajaxRun();
				
				this.listener(this);
			
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
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxMenuTeam, strz_Ajax.NotificatorPanelAjaxGet);
})();