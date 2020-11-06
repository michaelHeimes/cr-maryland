(function($) {
	'use strict';
	
// 	Full nav modifications
	$('li.last-links').removeClass('cell small-12 medium-6');
	$('li.last-links').wrapAll( "<ul class='last-3-wrap menu cell small-12 medium-6' />");
	
// 	Hidden Nav
	var $banner = $('.banner');
	var $hiddenNav = $('#hidden-nav');
	
	$(window).on("load scroll resize", function() {
		var bannerHeight = $banner.outerHeight();
		$hiddenNav.css('min-height', bannerHeight);
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
		$searchBar.fadeIn(200);
	});

	$(document).on('click', 'button#close-search', function(e){
		e.preventDefault();
		$searchBar.fadeOut(200);
	});
		
	
})(jQuery);

