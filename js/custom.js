(function($){
    var url = window.location.href;
    var lastURL = url.split(/[/ ]+/).pop();
    console.log('lastURL', lastURL);
    
	if(lastURL == 'index' || lastURL == '') {
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
    }

})(jQuery);