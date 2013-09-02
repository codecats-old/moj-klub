(function() {
	strz_Ajax.NotificatorPanelAjaxMenuButton = function(trigger) {
		this.init();
		this.triggerSelector = trigger;
	};
	strz_Ajax.NotificatorPanelAjaxMenuButton.prototype = {
		triggerSelector : null,
		run : function(){
			console.log('sel: '+this.triggerSelector);
			this.setTriggerSelector(this.triggerSelector);
			if($(this.getTriggerSelector()).length > 0) {
				this.setCallbackMyself(false);
				this.setEventName('click');
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('ul[rel=notification-messages]');
				this.ajaxRun();
				

				this.addCallback({
					justLog : {
						reference : console,
						methods : {
							'log' : 'button'
						}
					}
				});
			}
			
		}
	};
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxMenuButton, strz_Ajax.NotificatorPanelAjaxGet);
})();