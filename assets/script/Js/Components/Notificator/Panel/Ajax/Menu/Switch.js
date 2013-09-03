(function() {
	strz_Ajax.NotificatorPanelAjaxMenuSwitch = function(triggerIcon, requestor) {
		this.triggerIcon = triggerIcon;
		this.requestor = requestor;
	};
	strz_Ajax.NotificatorPanelAjaxMenuSwitch.prototype = {
		triggerIcon 	: null,
		requestor 		: null,
		
		submenus : {
			team 	: null,
			user 	: null
		},
		/**
		 * OnSwith find an icon, change url and rel in this icon to switched url, 
		 * initialize unswitched buttons, disable switched
		 */
		
		run : function(){

			this.submenus.team = new strz_Ajax.NotificatorPanelAjaxMenuTeam(
					this.onSwitchContext());
			this.submenus.user = new strz_Ajax.NotificatorPanelAjaxMenuUser(
					this.onSwitchContext());


			this.submenus.team.run();
			this.submenus.user.run();
			
			/**
    		 * Button continue read 
    		 */
			this.initContinueReadButton();
			
		
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
				self.initContinueReadButton();
				
				
				/**
				 * Submenus behavior
				 */
				submenuNames = self.getSubmenusNames();
				
				trigCont = context.getTriggerSelector();
				
				if ($(trigCont).hasClass('disabled') === true) {
					window.location.href = $(trigCont)[0].href;
				} else {
					//remove all disabledClass
					var submenusArr = self.getSubmenusNames();

					for (var i in submenusArr) {
						var triggerEnable = self.setRelLastArgument(trigCont, submenusArr[i]);
						
						if (triggerEnable === trigCont) {
							$(trigCont).addClass('disabled');
						} else {
							$(triggerEnable).removeClass('disabled');
						}
					}
				}
			}
		},
		
		/**
		 * Initializator continue read button
		 */
		initContinueReadButton : function() {
			this.continueRead = new strz_Ajax.NotificatorPanelAjaxContinue(
					'button[rel=notification-featch-more]', 
					this.triggerIcon, 
					'ul[rel=notification-messages]');
			this.continueRead.run();
			
			/**
			 * When continue read featch new content controls-buttons have to be re-initialized
			 */
			this.continueRead.addCallback({
				teamListener : {
					reference : this.submenus.team,
					methods : {
						'initializeButtons' : null
					}
				},
				userListener : {
					reference : this.submenus.user,
					methods : {
						'initializeButtons' : null
					}
				}
			});
		},
		
		/**
		 * Return array of submenus names as string
		 */
		getSubmenusNames : function() {
			var arr = [];
			for (var i in this.submenus) {
				arr.push(i);
			}
			return arr;
		},
		
		/**
		 * Change last argument of rel:
		 * 
		 * relString: ul[rel=controller-action-first]
		 * newArg	: secound
		 * 
		 * result 	: ul[rel=controller-action-secound]
		 */
		setRelLastArgument : function(relString, newArg) {
			var arr = relString.split('-');
			arr[ arr.length - 1 ] = (newArg + ']');
			return arr.join('-');
		},
		/**
		 * Listener is a requestor, method is setSendURL
		 */
		changeIconAddress : function(url) {
			this.requestor.setSendToURL(url);
		}
	};
//ROOT ELEMENT
})();