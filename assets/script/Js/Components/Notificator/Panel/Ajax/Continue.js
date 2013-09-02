
/**
 * Continue reading Button, sending asynchronous requests for new content. 
 * 
 * Trigger represents button selector, triggerHref is destination for send and triggerContent
 * represents content for put DOM elements in.
 */
(function() {
	strz_Ajax.NotificatorPanelAjaxContinue = function(trigger, triggerHref, triggerContent) {
		this.init();
		this.getterTrigger = trigger;
		this.triggerHref = triggerHref;
		this.triggerContent = triggerContent;
	};
	strz_Ajax.NotificatorPanelAjaxContinue.prototype = {
			
		/**
		 * Destination to send request
		 */
		triggerHref 		: null,
		
		/**
		 * Content to put new elements
		 */
		triggerContent 		: null,
		
		/**
		 * Count of all elements in content
		 */
		lastSender 			: null,
		
		/**
		 * Number of Page to send, satrts with 1 because on beginning first page already featched
		 */
		iterator 			: 1,
		
		/**
		 * Preparing data
		 */
		run : function(){
			
			this.setTriggerSelector(this.getterTrigger);
			if($(this.getTriggerSelector()).length > 0) {
				this.setCallbackMyself(false);
				this.setEventName('click');
				this.setSendInformator(this.getTriggerSelector());								
				this.setContentShow(this.triggerContent);
				this.ajaxRun();

				this.refresh();
			}
			
		},
		/**
		 * State of button refresh
		 */
		refresh : function() {
			var contentShow = this.getContentShow();
			this.iterator = 1;
			this.lastSender = this.checkLastSender(contentShow + '>li[sender]');

			var url = this.buildUrl(this.triggerHref, this.iterator);
			this.setSendToURL(url);

			/**
			 * Button may be disabled
			 */
			$(this.getTriggerSelector()).removeAttr('disabled');
		},
		
		/**
		 * Always do on receive correct data
		 */
		ajaxDone : function(data, action){
			data = JSON.parse(data);

			action.iterator++;
			var contentShow = action.getContentShow();

			/**
			 * Update url for sending asynchronous requests
			 */
			var url = action.buildUrl(action.triggerHref, action.iterator);
			action.setSendToURL(url);
			
			for (var i in data.View) {
				//update
				if ( $(contentShow+'> li[sender=' + i + ']').length > 0) {
					$(contentShow+'> li[sender=' + i + ']').outerHtml = data.View[i];
				} else {
				//new content
					$(contentShow).append(data.View[i]);
				}
				
			}

			/**
			 * put message if exists
			 */
			if (data.status)
				$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
			
			/**
			 * Last sender status to variable
			 */
			var lastSender = action.checkLastSender(contentShow+'> li[sender]');

			/**
			 * Check count of last elements and current elements if nothing changed it means
			 * no more information to featch 
			 */
			if (isNaN(lastSender) || lastSender === action.lastSender) {
				$(action.getTriggerSelector()).attr('disabled', 'disabled');
			} else action.lastSender = lastSender;
			
		},
		
		/**
		 * Check attribute of last element in given content 
		 */
		checkLastSender : function(selector) {
			return parseInt($(selector).last().attr('sender'));
		},
		
		/**
		 * Builds url
		 */
		buildUrl : function(selectorHref, iterator){
			return $(selectorHref)[0].href+'/'+iterator;
		}
	};
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxContinue, strz_Ajax.NodeAction);
})();