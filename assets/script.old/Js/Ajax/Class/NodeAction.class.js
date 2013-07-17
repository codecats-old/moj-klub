(function() {
	strz_Ajax.NodeAction = function() {
	};
	/**
	 * extendable container
	 */
	strz_Ajax.NodeAction.prototype = {
		init : function() {
			this.initClick();
		},
		initClick : function() {
			var allowInit = this.isAllowedPage(document.location.pathname);
			if (allowInit) {
				var selector = this.getTrigger();
				this.setSendToURL(selector.context.URL);
				this.initAjaxjQuery();
			}
		},
		initAjaxjQuery : function() {
			var methodType = this.getMethodType;
			var requestDone = this.onDone;
			var callbackRun = this.runCallback;
			var setBeforeSend = this.setBeforeSendAjax;
			var requestForURL = this.getSendToURL();
			var that = this;
			var selector = this.getTrigger();
			var eventName = this.getEventName();
			selector.unbind(eventName);// prevent double ajax send e.g. in ajax
										// request
			selector[eventName](function(event) {
				event.preventDefault();
				if(that.dataToSend)
					var dataFields = that.getDataToSend().serialize();
				$.ajax({
					type : methodType(),
					// data:dataField,
					data : dataFields,
					self : $(this).parent(),
					url : requestForURL,
					cache : false,
					error : function(err) {
						console.log(err);
						switch (err.status) {
						case 403:
							console.log('just login error');
						default:
							$('.content').html(err.responseText);
							break;
						}
					},
					beforeSend : function() {
						setBeforeSend(that);
					}
				}).done(function(data) {
					requestDone(this.self, data, that);
					callbackRun(that);
				});
			});

		},
		/**
		 * @param {jQuery
		 *            element} here
		 */
		setBeforeSendAjax : function(that) {
			var here = that.getSendInformator();
			here.fadeOut('fast');
		},
		getMethodType : function() {
			return null;
		},
		onDone : function(self, data, that) {
		}

	};
	strz_Ajax.Extend(strz_Ajax.NodeAction, strz_Ajax.NodePermissionAction);
})();