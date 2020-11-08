<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
<!-- 			<?php get_template_part( 'parts/content', 'offcanvas' ); ?> -->
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<header class="header" role="banner" data-sticky data-margin-top="0" data-sticky-on="small">

					<div class="header-top">
						<div class="grid-container fluid">
							<div class="grid-x grid-padding-x align-justify">
								
								<div class="left cell shrink">
									<ul class="menu">
										<li><a href="<?php echo home_url(); ?>">
												<span class="show-for-sr"><?php bloginfo('name'); ?></span>
												<?php 
												$image = get_field('top_bar_logo', 'option');
												if( !empty( $image ) ): ?>
												    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
										</a></li>
									</ul>
								</div>
								
								<div class="right cell shrink">
									<div class="top"><?php joints_theme_nav(); ?></div>
									<div class="bottom">
										
										<a id="toggle-search" href="#">Search</a>
										
										<a id="toggle-nav" href="#">Menu</a>
										
									</div>
								</div>		
		
		<!--
								<div class="top-bar-right float-right show-for-small-only">
									<ul class="menu">
										<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
										<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
									</ul>
								</div>
		-->
							</div>
						</div>
					</div>
					
					<div id="hidden-nav" class="full-nav">
						
						<div class="close-wrap text-right">
							<a id="hidden-nav-close" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hn-close.svg" alt="hidden-nan-close"/></a>
						</div>
						
						<?php joints_full_nav(); ?>
						
					</div>
					
					<div id="search-form-wrap" class="search-form-wrap">
						<div class="grid-container fluid">
							<div class="grid-x grid-padding-x">
								<div class="left cell small-12 medium-8 medium-offset-2 large-6 large-offset-3">
									
									<form method="get" action="/">
										<input type="text" name="s" placeholder="Enter search terms here" class="">
										<input type="hidden" name="" value="">
										<button type="submit">S</button>
										<button type="button" id="close-search">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/hn-close.svg" alt="hidden-nan-close"/>
										</button>
									</form>
									
								</div>
							</div>
						</div>
					</div>
	 	
				</header> <!-- end .header -->