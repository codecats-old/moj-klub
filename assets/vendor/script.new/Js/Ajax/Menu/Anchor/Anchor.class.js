(function() {
	strz_Ajax.Anchor = function(rel, fieldShow, reload){
		this.init();
		this.rel=rel;
		this.reload=reload;
		this.setContentShow(fieldShow);
	};
	strz_Ajax.Anchor.prototype = {
		reload:null,
		rel:null,
		run:function(){
			console.log(this);
			this.setTriggerSelector('a[rel='+this.rel+']');
			if($(this.getTriggerSelector()).length>0){
				this.setCallbackMyself(this.reload);
				this.setSendInformator(this.getTriggerSelector());
				var anchor=$(this.getTriggerSelector());
			
		//		this.setContentShow(form.parentNode);
			//	this.setSendData(form);
				this.setSendToURL(anchor[0].href);
				this.ajaxRun();
			}
		},
		ajaxDone:function(data, action) {
			this.uber.ajaxDone(data,action);
			data=JSON.parse(data);

			if(data.status){
				this.showStatusMessage(data);
				
				if(data.status['reload']==true){
					$('header+*').fadeTo( 'slow', 0.8 );
					setTimeout(function(){document.location.reload();},2000);
				}
			}
		},
		showStatusMessage:function(data){
			$().toastmessage('show'+data.status['state']+'Toast', data.status['message']);
		}
	};
	strz_Ajax.Extend(strz_Ajax.Anchor, strz_Ajax.NodeAction);
})();