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
    // Swiper Slider
		if ($('.swiper-slider .swiper-container').length > 0) {	
			$('.swiper-slider .swiper-container').each(function() {
				var swiperSlider = $(this),
					swiper_speed = swiperSlider.data('speed'),
					swiper_autoHeight = swiperSlider.data('autoheight'),
					swiper_autoplay = swiperSlider.data('autoplay'),
					swiper_autoplayStopOnLast = swiperSlider.data('autoplaystoponlast'),
					swiper_autoplayDisableOnInteraction = swiperSlider.data('autoplaydisableoninteraction'),
					swiper_freeMode = swiperSlider.data('freemode'),
					swiper_effect = swiperSlider.data('effect'),
					swiper_parallax = swiperSlider.data('parallax'),
					swiper_spaceBetween = swiperSlider.data('spacebetween'),
					swiper_slidesPerView = swiperSlider.data('slidesperview'),
					swiper_centeredSlides = swiperSlider.data('centeredslides'),
					swiper_slidesOffsetBefore = swiperSlider.data('slidesoffsetbefore'),
					swiper_slidesOffsetAfter = swiperSlider.data('slidesoffsetafter'),				
					swiper_paginationType = swiperSlider.data('paginationtype'),
					swiper_paginationHide = swiperSlider.data('paginationhide'),
					swiper_keyboardControl = swiperSlider.data('keyboardcontrol'),
					swiper_loop = swiperSlider.data('loop'),
					swiper_loopedSlides = swiperSlider.data('loopedslides');
					
				if(swiper_speed == null){ swiper_speed = 700; }
				if(swiper_autoHeight == null){ swiper_autoHeight = false; }
				if(swiper_autoplay == null){ swiper_autoplay = null; }
				if(swiper_autoplayStopOnLast == null){ swiper_autoplayStopOnLast = false; }
				if(swiper_autoplayDisableOnInteraction == null){ swiper_autoplayDisableOnInteraction = true; }
				if(swiper_freeMode == null){ swiper_freeMode = false; }
				if(swiper_effect == null){ swiper_effect = 'slide'; }
				if(swiper_parallax == null){ swiper_parallax = false; }
				if(swiper_spaceBetween == null){ swiper_spaceBetween = 0; }
				if(swiper_slidesPerView == null){ swiper_slidesPerView = 'auto'; }
				if(swiper_centeredSlides == null){ swiper_centeredSlides = false; }
				if(swiper_slidesOffsetBefore == null){ swiper_slidesOffsetBefore = 0; }
				if(swiper_slidesOffsetAfter == null){ swiper_slidesOffsetAfter = 0; }
				if(swiper_paginationType == null){ swiper_paginationType = 'bullets'; }
				if(swiper_paginationHide == null){ swiper_paginationHide = true; }
				if(swiper_keyboardControl == null){ swiper_keyboardControl = false; }
				if(swiper_loop == null){ swiper_loop = true; }
				
				if( swiperSlider.find('.swiper-pagination').length > 0 && swiper_paginationType == 'bullets' ) {
					var swiper_pagination = '.swiper-pagination',
						swiper_paginationClickable = true;
				} else if( swiperSlider.find('.swiper-pagination').length > 0 && swiper_paginationType !== 'bullets' ) {
					var swiper_pagination = '.swiper-pagination',
						swiper_paginationClickable = false;
				} else {
					var swiper_pagination = '',
						swiper_paginationClickable = false;
				}
				
				if( swiper_slidesPerView == 'auto' &&  swiper_loop == true ) {
					var swiper_loopedSlides = swiperSlider.find('.swiper-slide').length;
				} else {
					var swiper_loopedSlides = 0;
				}
				
				var mySwiper = new Swiper(swiperSlider, {
					speed: swiper_speed,
					autoHeight: swiper_autoHeight,
					autoplay: swiper_autoplay,
					autoplayStopOnLast: swiper_autoplayStopOnLast,
					autoplayDisableOnInteraction: swiper_autoplayDisableOnInteraction,
					freeMode: swiper_freeMode,
					effect: swiper_effect,
					parallax: swiper_parallax,
					spaceBetween: swiper_spaceBetween,
					slidesPerView: swiper_slidesPerView,
					centeredSlides: swiper_centeredSlides,
					slidesOffsetBefore: swiper_slidesOffsetBefore,
					slidesOffsetAfter: swiper_slidesOffsetAfter,
					grabCursor: false,
					simulateTouch: false,
					pagination: swiper_pagination,
					paginationType: swiper_paginationType,
					paginationClickable: swiper_paginationClickable,
					nextButton: '.swiper-button-next',
					prevButton: '.swiper-button-prev',
					keyboardControl: swiper_keyboardControl,
					loop: swiper_loop,
					loopedSlides: swiper_loopedSlides,
					onInit: function(swiper){
						swiperSlider.find('.swiper-slide-active .animated').each(function() {
							var elem = $(this),
								animation = elem.data('animation'),
								animationDelay = elem.data('animation-delay');

							if(!elem.parents('.swiper-slide').hasClass('swiper-slide-active') && elem.hasClass('visible')) {				
								elem.removeClass(animation).removeClass('visible');
							}
								
							if(elem.parents('.swiper-slide').hasClass('swiper-slide-active') && !elem.hasClass('visible')) {			
								if ( animationDelay ) {
									setTimeout(function(){
										elem.addClass( animation + ' visible' );
									}, animationDelay);
								} else {
									elem.addClass( animation + ' visible' );
								}
							}
						});
					},
					onSlideChangeEnd: function(swiper){
						swiperSlider.find('.animated').each(function() {
							var elem = $(this),
								animation = elem.data('animation'),
								animationDelay = elem.data('animation-delay');
							
							if(!elem.parents('.swiper-slide').hasClass('swiper-slide-active') && elem.hasClass('visible')) {				
								elem.removeClass(animation).removeClass('visible');
							}
							
							if(elem.parents('.swiper-slide').hasClass('swiper-slide-active') && !elem.hasClass('visible')) {			
								if ( animationDelay ) {
									setTimeout(function(){
										elem.addClass( animation + ' visible' );
									}, animationDelay);
								} else {
									elem.addClass( animation + ' visible' );
								}
							}
						});
					}
				});
			});
		}
})(jQuery);
