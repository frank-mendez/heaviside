(function($){

    
    $(window).on('load', function() {
        $('.preloader').delay(500).fadeOut('slow');
            $('body').delay(500).css({'overflow':'visible'});
    });

    var url = window.location.href;
    var lastURL = url.split(/[/ ]+/).pop();
    console.log('lastURL', lastURL);

    $('.carousel').carousel();
    
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

    /* Back to Top */
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        $(window).on('scroll', function () {
            backToTop();
        });
        $('#back-to-top').on('click', function (e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }

})(jQuery);