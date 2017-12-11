(function($){
    var url = window.location.href;
    var lastURL = url.split(/[/ ]+/).pop();
    
	if(lastURL == 'index.php' || lastURL == '') {
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