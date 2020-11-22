<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

  	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap', false ); 
  	
    wp_enqueue_script( 'cr-gsap', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), true );

    wp_enqueue_script( 'cr-gsap-scroll', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js', array(), true );
  	
    wp_enqueue_script( 'cr-slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), true );
        
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
        
	wp_enqueue_style( 'cr-slick-styles', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', false ); 
	
	
	// Localize Home Page Community Numbers 
wp_localize_script('site-js', 'site_js', array(  

	'list_parent' => get_field( 'four_sets_numbers_and_labels' ),
	
)); 
	
	
   
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);