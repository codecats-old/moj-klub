(function() {
	strz_Ajax.Index = function(){
		this.init();
	};
	strz_Ajax.Index.prototype = {
		run:function(){			
			this.setCallbackMyself(true);
			this.setTriggerSelector('a[rel=index]');
			this.setSendInformator(this.getTriggerSelector());
			this.setSendToURL($(this.getTriggerSelector())[0].href);//$(a.getTriggerSelector())[0].href
			this.setContentShow('div#contentTest');
			this.setAllowedPages([['ajax']]);
			this.ajaxRun();


			var view=new strz_Ajax.Get();
			view.run();
			
			var form=new strz_Ajax.Post();
			form.run();

			this.addCallback({
				view:{
					reference:view,
					methods:{
						'run':[]
					}
				},
				form:{
					reference:form,
					methods:{
						'run':[]
					}
				}
			});
		},
	};
	strz_Ajax.Extend(strz_Ajax.Index, strz_Ajax.NodeAction);
})();