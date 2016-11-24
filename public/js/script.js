(function($) {
    "use strict";

    $('a.page-scroll').bind('click', function(e) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        e.preventDefault();
    });

    $('body').scrollspy({
        target: '.navbar-fixted-top',
        offset: 100
    });

    $('navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    $('#mainNav').affix({
        offset: {
            top: 50
        }
    });
})(jQuery);
