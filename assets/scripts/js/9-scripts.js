(function($) {
	'use strict';
	
// 	Full nav modifications
	$('.full-nav').each( function(i) {
		$(this).find('li.last-links').wrapAll( "<ul class='last-3-wrap menu cell small-12 medium-6' />");
		$(this).find('li.last-links').removeClass('cell small-12 medium-6');
	});
	
// 	Hidden Nav
	var $sticky = $('header.header');
	var $banner = $('.banner');
	var $hiddenNav = $('#hidden-nav');
	
	$(window).on("load resize", function() {
		var stickyHeight = $sticky.outerHeight();
		var bannerHeight = $banner.outerHeight();
		var navHeight = stickyHeight + bannerHeight;
		$hiddenNav.css('min-height', navHeight);		
	});

	$(document).on('click', 'a#toggle-nav', function(e){
		e.preventDefault();
		$hiddenNav.fadeIn(200);
	});

	$(document).on('click', 'a#hidden-nav-close', function(e){
		e.preventDefault();
		$hiddenNav.fadeOut(200);
	});

	
// 	Header Search
	var $searchBar = $('#search-form-wrap');
	
	$(document).on('click', 'a#toggle-search', function(e){
		e.preventDefault();
		$('header.header').addClass('search-on');
		$searchBar.fadeIn(200);
	});

	$(document).on('click', 'button#close-search', function(e){
		e.preventDefault();
		$('header.header').removeClass('search-on');
		$searchBar.fadeOut(200);
	});
	
	
// 	Home Page Blog Slider
	if($('.blog-slider').length) {
		
		$('.blog-slider').slick({
			infinite: true,
			speed: 500,
			slidesToShow: 2,
			slidesToScroll: 1,
			adaptiveHeight: true,
            dots: false,
            arrows: true,
            prevArrow: $('.slider-nav-wrap .prev'),
			nextArrow: $('.slider-nav-wrap .next'),
            responsive: [
                {
                  breakpoint: 640,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },	            
            ]
		});
		
	}
	
	
// 	Add extra bottom margin to last module that isn't followed by the gallery slider
	if($('section.module').length) {
		
		var $lastModule = $('section.module').last();
		
		console.log($lastModule);
		
		if ( $($lastModule).next('section').hasClass('image-gallery-slider') ) {
			
			
		} else {
		
			$($lastModule).addClass('last');
		
		}
	}

	
// 	Image Gallery Module Slider
	if($('.image-gallery-slider .gallery-slider').length) {
		
		$('.image-gallery-slider .gallery-slider').slick({
			infinite: true,
			speed: 9000,
			autoplay: true,
			autoplaySpeed: 0,
			slidesToShow: 2,
			slidesToScroll: 2,
			adaptiveHeight: true,
            dots: false,
            arrows: false,
            variableWidth: true
		});
		
	}

// 	Testimonial Module Slider
	if($('.testimonial-slider').length) {
		
		$('.testimonial-slider').slick({
			infinite: true,
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			adaptiveHeight: false,
            dots: true,
            arrows: false,
            variableWidth: false
		});
		
	}
	

// 	Slider-Copy Module Slider
	if($('.slider-copy .sc-slider').length) {
		
		$('.slider-copy .sc-slider').slick({
			infinite: true,
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			adaptiveHeight: false,
            dots: false,
            arrows: true,
            variableWidth: false,
            prevArrow:"<button type='button' class='slider-button slick-prev pull-left'><img src='/wp-content/themes/cr-maryland/assets/images/slide-prev-arrow.svg'/></button>",
            nextArrow:"<button type='button' class='slider-button slick-next pull-right'><img src='/wp-content/themes/cr-maryland/assets/images/slide-next-arrow.svg'/></button>"
		});
		
	}


// 	About Page Slider
	if($('.ir-image-slider').length) {
		
		$('.ir-image-slider').slick({
			infinite: true,
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			adaptiveHeight: false,
            dots: false,
            arrows: true,
            variableWidth: false,
            prevArrow:"<button type='button' class='slider-button slick-prev pull-left'><img src='/wp-content/themes/cr-maryland/assets/images/slide-prev-arrow.svg'/></button>",
            nextArrow:"<button type='button' class='slider-button slick-next pull-right'><img src='/wp-content/themes/cr-maryland/assets/images/slide-next-arrow.svg'/></button>"
		});
		
	}
	
	
// 	Step Cubes
	if($('.step-cubes').length) {
		
		$(window).on("load resize", function() {
			
			var windowsize = $(window).width();

			if (windowsize > 639) {
		
				var $cubeWidth = $('.single-cube').width();
				
				$('.single-cube .inner').css('min-height', $cubeWidth);
			
			}
		
		});
		
	}
	
	// Home Community Numbers Count Up
	if ($('.four-col-numbers-labels').length) {
		
		$('.four-col-numbers-labels').each(function(i) {
		
			var $num1 = site_js.list_parent.set_1.number;
			var $num2 = site_js.list_parent.set_2.number;
			var $num3 = site_js.list_parent.set_3.number;
			var $num4 = site_js.list_parent.set_4.number;
					
			var counter = { var: 0 };
			
			var $value1 = document.getElementById("set-1");
			var $value2 = document.getElementById("set-2");
			var $value3 = document.getElementById("set-3");
			var $value4 = document.getElementById("set-4");
			
			gsap.to(counter, 2, {
				var: $num1,
				onUpdate: function() {
				$value1.innerHTML = numberWithCommas(Math.ceil(counter.var));
				},
				ease: Circ.easeOut,
				scrollTrigger: {
				    trigger: '.four-col-numbers-labels',
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
	
			var tal2 = document.getElementById("set-2");
			
			gsap.to(counter, 2, {
				var: $num2,
				onUpdate: function() {
				$value2.innerHTML = numberWithCommas(Math.ceil(counter.var));
				},
				ease: Circ.easeOut,
				scrollTrigger: {
				    trigger: '.four-col-numbers-labels',
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
			
			var tal3 = document.getElementById("set-3");
			
			gsap.to(counter, 2, {
				var: $num3,
				onUpdate: function() {
				$value3.innerHTML = numberWithCommas(Math.ceil(counter.var));
				},
				ease: Circ.easeOut,
				scrollTrigger: {
				    trigger: '.four-col-numbers-labels',
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
	
			var tal3 = document.getElementById("set-4");
			
			gsap.to(counter, 2, {
				var: $num4,
				onUpdate: function() {
				$value4.innerHTML = numberWithCommas(Math.ceil(counter.var));
				},
				ease: Circ.easeOut,
				scrollTrigger: {
				    trigger: '.four-col-numbers-labels',
				    start: 'top 75%',
				    toggleActions: 'play none play reverse'
				}
			});
			
			function numberWithCommas(x) {
				return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			}
		
		});
		
	}
	
})(jQuery);

