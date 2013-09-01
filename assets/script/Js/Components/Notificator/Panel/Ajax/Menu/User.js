(function() {
	strz_Ajax.NotificatorPanelAjaxMenuUser = function(listener) {
		this.init();
		this.listener = listener;
		
	};
	strz_Ajax.NotificatorPanelAjaxMenuUser.prototype = {
		listener : null,
		run : function(){

			this.setTriggerSelector('a[rel=notification-switch-user]');
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
			
		}/*,
		ajaxDone : function(data, action){
			data = JSON.parse(data);
			
			$().toastmessage('showNoticeToast', 'hula');
		}*/
	};
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxMenuUser, strz_Ajax.NotificatorPanelAjaxGet);
})();