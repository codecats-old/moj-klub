(function() {
	strz_Ajax.NotificatorPanelAjaxContinue = function(trigger, triggerHref, triggerContent) {
		this.init();
		this.getterTrigger = trigger;
		this.triggerHref = triggerHref;
		this.triggerContent = triggerContent;
	};
	strz_Ajax.NotificatorPanelAjaxContinue.prototype = {
		triggerHref 		: null,
		triggerContent 		: null,
		offset				: null,
		lastSender 			: null,
		iterator 			: 0,
		run : function(){
			
			this.setTriggerSelector(this.getterTrigger);
			if($(this.getTriggerSelector()).length > 0) {
				this.setCallbackMyself(false);
				this.setEventName('click');
				this.setSendInformator(this.getTriggerSelector());								
				this.setContentShow(this.triggerContent);
				this.ajaxRun();

				var contentShow = this.getContentShow();
				
			//	this.offset = this.checkLastSender(contentShow + '>li[sender]');
			//	this.iterator = this.lastSender + 1;
				var url = $(this.triggerHref)[0].href+'/'+this.iterator;
		//		this.iterator++;
		//		console.log(url);
				this.setSendToURL(url);
			}
			
		},
		ajaxDone : function(data, action){
			data = JSON.parse(data);
			
			//if (action.)
			action.iterator++;
			var contentShow = action.getContentShow();
			
		//	action.iterator += Object.keys(data.View).length;
		//	action.iterator = action.lastSender + 1;
			var url = $(action.triggerHref)[0].href+'/'+action.iterator;
			action.setSendToURL(url);
			
		//	console.log(action.lastSender);
			
			for (var i in data.View) {
				//update
				if ( $(contentShow+'> li[sender=' + i + ']').length > 0) {
					$(contentShow+'> li[sender=' + i + ']').outerHtml = data.View[i];
				} else {
					
					$(contentShow).append(data.View[i]);
				}
				
			}

			if (data.status)
				$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
			
		},
		checkLastSender : function(query) {
			return parseInt($(query).last().attr('sender'));
		}
	};
	strz_Ajax.Extend(strz_Ajax.NotificatorPanelAjaxContinue, strz_Ajax.NodeAction);
})();