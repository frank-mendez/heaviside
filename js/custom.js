(function($){

    
    $(window).on('load', function() {
        $('.preloader').delay(500).fadeOut('slow');
            $('body').delay(500).css({'overflow':'visible'});
    });

    var url = window.location.href;
    var lastURL = url.split(/[/ ]+/).pop();

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

    /* Smooth scroll */
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });

})(jQuery);