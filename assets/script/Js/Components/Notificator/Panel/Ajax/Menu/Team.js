(function() {
	strz_Ajax.NotificatorPanelAjaxMenuTeam = function(listener) {
		this.init();
		this.listener = listener;
	};
	strz_Ajax.NotificatorPanelAjaxMenuTeam.prototype = {
			
		/**
		 * Listener
		 */
		listener 	: null,
		
		/**
		 * Content where to put messages
		 */
		contentTrig : null,
		
		/**
		 * Component running status
		 */
		isRunning 	: false,
		run : function(){

			this.setTriggerSelector('a[rel=notification-switch-team]');
			if($(this.getTriggerSelector()).length > 0) {
				this.isRunning = true;
				this.contentTrig = 'ul[rel=notification-messages]';
				
				this.setCallbackMyself(false);
				this.setEventName('click');
				this.setSendInformator(this.getTriggerSelector());
				this.setSendToURL($(this.getTriggerSelector())[0].href);
				this.setContentShow(this.contentTrig);
				this.ajaxRun();
				
				this.initializeButtons();
				
				
				this.addCallback({
					switchListener : {
						reference : this,
						methods : {
							'listener' : this,
							'initializeButtons' : null
						}
					}
				});
			}
			
		},
		
		/**
		 * Initialize Buttons only if component running, finds buttons
		 */
		initializeButtons : function() {
			if (this.isRunning) {
				var contentTrig = this.contentTrig;
				var setButton 	= this.setButton;
				var sendersArr = $(contentTrig+' li[sender]').map(function(){
					return $(this).attr('sender');
				}).get();
				
				for (var i in sendersArr) {
					var buttonTrig = contentTrig + ' li[sender=' + sendersArr[i] + '] .btn-group';
					setButton( buttonTrig+' a[rel=accept]' );
					setButton( buttonTrig+' a[rel=refuse]' );
					setButton( buttonTrig+' a[rel=cancel]' );
				}
			}

		},
		
		/**
		 * Button behavior
		 */
		setButton : function(trigger){
			var button = new strz_Ajax.NotificatorPanelAjaxMenuButton(trigger);
			button.ajaxDone = function(data, action) {
				data = JSON.parse(data);
				
				/**
				 * Find element and replace new content 
				 */
				var senderElement = $(action.getContentShow()+'>li[sender=' + data.View[0]['key'] + ']');
				if ( senderElement.length > 0 ) {
					senderElement[0].outerHTML = data.View[0]['view'];
				}
			};
			
			button.run();
		}
	};
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxMenuTeam, strz_Ajax.NotificatorPanelAjaxGet);
})();