(function() {
	strz_Ajax.NotificatorPanelAjaxMenuTeam = function(listener, triggerContent) {
		this.init();
		this.listener = listener;
		this.triggerContent = triggerContent;
	};
	strz_Ajax.NotificatorPanelAjaxMenuTeam.prototype = {
		listener : null,
		triggerContent : null,
		run : function(){

			this.setTriggerSelector('a[rel=notification-switch-team]');
			if($(this.getTriggerSelector()).length > 0) {
				this.setCallbackMyself(false);
				this.setEventName('click');
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow('ul[rel=notification-messages]');
				this.ajaxRun();
				
				console.log(this.triggerContent);
				for (var i=0; i < $(this.triggerContent + ' li[sender]').length; i++) {
					var buttonTrig = this.triggerContent + ' li[sender] .btn-group';
					this.setButton(buttonTrig);
				}
				
				
				this.addCallback({
					switchListener : {
						reference : this,
						methods : {
							'listener' : this
						}
					}
				});
			}
			
		},
		setButton : function(trigger){
			var button = new strz_Ajax.NotificatorPanelAjaxMenuButton(trigger);
			button.run();
		}
	};
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxMenuTeam, strz_Ajax.NotificatorPanelAjaxGet);
})();