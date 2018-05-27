$(document).ready(function(){
	"use strict";

    // 1. Scroll To Top
		$(window).on('scroll',function () {
			if ($(this).scrollTop() > 600) {
				$('.return-to-top').fadeIn();
			} else {
				$('.return-to-top').fadeOut();
			}
		});
		$('.return-to-top').on('click',function(){
				$('html, body').animate({
				scrollTop: 0
			}, 1500);
			return false;
		});


	// 2 . hcsticky

		$('#menu').hcSticky();


	// 3. counter
		$(window).on('load', function(){
			$('.counter').counterUp({
				delay: 10,
				time: 3000
			});
		});


	

        $('body').scrollspy({
            target:'.navbar-collapse',
            offset:0
        });

});
