(function(){
	strz_Ajax.Link=function(rel){
	};
	strz_Ajax.Link.prototype={
		selector:{},
		set:function(obj){
			this.selector['trigger']=obj['trigger'];
			this.selector['info']=obj['info'];
			this.selector['response']=obj['response'];
			//this.setCallback([[this, 'init']]);
		},
		get:function(s){
			return this.selector[s];
		},
		refreshTriggers:function(){
			this.setTrigger($(this.get('trigger')));
			this.setSendInformator($(this.get('info')));
			this.setContentShow($(this.get('response')));
		},
		init:function(){
			this.refreshTriggers();
			var trigger=this.getTrigger();
			if(trigger.length>0){
				this.setSendToURL(trigger[0].href);
				this.setEventName('click');
				this.initClick();
			}
		},
		onDone:function(self, dataView, that){
			data=JSON.parse(dataView);
			that.refreshTriggers();
			var content=that.getContentShow();
			content.hide();
			content.html(data.View);
			content.fadeIn('slow');
			var here=that.getSendInformator();
			here.fadeIn('fast');
			if(data.status){
				if(data.status['reload']=='true'){
					$('header+*').fadeTo( 'slow', 0.5 );
					setTimeout(function(){document.location.reload();},2000);
				}
				$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
			}
		}
	};
	strz_Ajax.Extend(strz_Ajax.Link, strz_Ajax.ViewGetAction);
})();