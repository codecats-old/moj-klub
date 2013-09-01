(function() {
	strz_Ajax.NotificatorPanelAjaxMenuSwitch = function(triggerIcon, requestor) {
		this.triggerIcon = triggerIcon;
		this.requestor = requestor;
	};
	strz_Ajax.NotificatorPanelAjaxMenuSwitch.prototype = {
		triggerIcon : null,
		requestor	: null,
		submenus : {
			team 	: null,
			user 	: null
		},
		/**
		 * OnSwith find an icon, change url and rel in this icon to switched url, 
		 * initialize unswitched buttons, disable switched
		 */
		
		run : function(){
			this.submenus.team = new strz_Ajax.NotificatorPanelAjaxMenuTeam(this.onSwitchContext());
			this.submenus.user = new strz_Ajax.NotificatorPanelAjaxMenuUser(this.onSwitchContext());
			
			this.submenus.team.run();
			this.submenus.user.run();
		
		},
		onSwitchContext : function(){
			var self = this;
			return function(context){
				triggerActivated = context.getTriggerSelector();
				triggerIcon = self.triggerIcon;
				
				$(self.triggerIcon).attr('href', $(triggerActivated).attr('href'));
				
				self.changeIconAddress($(triggerActivated).attr('href'));
				/**
	    		 * Button continue read 
	    		 */
				self.continueRead = new strz_Ajax.NotificatorPanelAjaxContinue(
									'button[rel=notification-featch-more]', 
									self.triggerIcon, 
									'ul[rel=notification-messages]');
				self.continueRead.run();
			}
		},
		/**
		 * Listener is a requestor, method is setSendURL
		 */
		changeIconAddress : function(url) {
			this.requestor.setSendToURL(url);
			console.log(this);
		//	listener.object[listener.method]('onet.pl');
		}
	};
//	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxMenuSwitch, strz_Ajax.NodeAction);
})();