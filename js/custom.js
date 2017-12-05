(function($){
    
	$(window).scroll(function () { 

        if ($(window).scrollTop() > 867) {
        	var navbar = $("#navbar");
        	navbar.css('cssText', 'background-color:#000000b5!important');
        }
        if ($(window).scrollTop() < 867) {
        	var navbar = $("#navbar");
        	navbar.css('cssText', 'background-color:transparent!important');
        }
    });

})(jQuery);