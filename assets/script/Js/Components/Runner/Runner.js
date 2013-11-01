/**
 *
 */
(function(){
    strz_Ajax.Runner = function (obj){
    //	var self = this;
    //	var __construct = function(obj){}
   // 	__construct(obj);
    };
    strz_Ajax.Runner.prototype = {
    	trigger 	: '#timer', 
    	startButton	: '#timerStart',
    	resetButton	: '#timerReset',
    	stopButton 	: '#timerStop',
    	fullScrBtn 	: 'button[rel=runner-fullscreen]',
    	
    	init : function() {   		
    		var trigger = this.trigger,
    			btnStart = this.startButton;
    		
		    $(this.trigger).runner({
		        autostart: false,
		        milliseconds: false
		    });
		    
		    $(this.startButton).click(function(e) {
		        e.preventDefault();
		        $(trigger).runner('start');
		        $(btnStart).addClass('active');
		    });
		    
		    $(this.resetButton).click(function(e) {
		    	e.preventDefault();
		        $(trigger).runner('reset');
		    });
		    
		    $('#timerStop').click(function(e) {
		    	e.preventDefault();
		        $(trigger).runner('stop');
		        $(btnStart).removeClass('active');
		    });


			$(this.fullScrBtn).click(this.listeners.toggleFullScreen);
    	},
    	
    	listeners : { 
	    		toggleFullScreen : function(e) {
		    		e.preventDefault();
		    		var elem = $('div.runner')[0];
		    		if (elem.requestFullscreen) {
		    			elem.requestFullscreen();
		    		} else if (elem.mozRequestFullScreen) {
		    			elem.mozRequestFullScreen();
		    		} else if (elem.webkitRequestFullscreen) {
		    			elem.webkitRequestFullscreen();
		    		}
		    	/*
		    	  if (document.cancelFullScreen) {
		    	      document.cancelFullScreen();
		    	    } else if (document.mozCancelFullScreen) {
		    	      document.mozCancelFullScreen();
		    	    } else if (document.webkitCancelFullScreen) {
		    	      document.webkitCancelFullScreen();
		    	    }
		    	 */
    		}
    	}
    };
    // ROOT element
})();