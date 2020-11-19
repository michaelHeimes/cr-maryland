<?php
		
// Register menus
register_nav_menus(
	array(
		'full-nav'		=> __( 'The Full Menu', 'jointswp' ),		// Main nav in header
		'theme-nav'		=> __( 'The Theme Menu', 'jointswp' ),		// Main nav in header
		'invest-nav'		=> __( 'The Invest Menu', 'jointswp' ),		// Main nav in header
		'sell-nav'		=> __( 'The Sell Menu', 'jointswp' ),		// Main nav in header
		'rent-nav'		=> __( 'The Rent Menu', 'jointswp' ),		// Main nav in header
		'buy-nav'		=> __( 'The Buy Menu', 'jointswp' ),		// Main nav in header
		'community-nav'		=> __( 'The Community Menu', 'jointswp' ),		// Main nav in header
		'audience-blog-nav'		=> __( 'The Audience Blog Menu', 'jointswp' ),		// Main nav in header
/* 		'offcanvas-nav'	=> __( 'The Off-Canvas Menu', 'jointswp' ), */	// Off-Canvas nav
/* 		'footer-links'	=> __( 'Footer Links', 'jointswp' )	 */		// Secondary nav in footer
	)
);

// The Full Menu
function joints_full_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'main-nav',					// Adding custom nav id
		'menu_class'		=> 'main-nav medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s grid-x grid-padding-x">%3$s</ul>',
		'theme_location'	=> 'main-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'add_li_class'      => 'cell small-12 medium-6',
		'walker'			=> new Full_Menu_Walker()
	));
}

// The Toggle Menu
function joints_theme_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'theme-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'theme-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// The Invest Menu
function joints_invest_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'invest-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu grid-x grid-padding-x align-center',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'invest-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'add_li_class'      => 'cell shrink',
		'link_before'       => '<span>',
		'link_after'        => '</span>',
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// The Sell Menu
function joints_sell_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'sell-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu grid-x grid-padding-x align-center',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'sell-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'add_li_class'      => 'cell shrink',
		'link_before'       => '<span>',
		'link_after'        => '</span>',		
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// The Rent Menu
function joints_rent_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'rent-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu grid-x grid-padding-x align-center',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'rent-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'add_li_class'      => 'cell shrink',
		'link_before'       => '<span>',
		'link_after'        => '</span>',		
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// The Buy Menu
function joints_buy_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'buy-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu grid-x grid-padding-x align-center',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'buy-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'add_li_class'      => 'cell shrink',
		'link_before'       => '<span>',
		'link_after'        => '</span>',		
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// The Community Menu
function joints_community_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'community-nav',					// Adding custom nav id
		'menu_class'		=> 'medium-horizontal menu grid-x grid-padding-x align-center',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'community-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'add_li_class'      => 'cell shrink',
		'link_before'       => '<span>',
		'link_after'        => '</span>',
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// The Audience Blog Menu
function joints_audience_blog_nav() {
	wp_nav_menu(array(
		'container'			=> false,						// Remove nav container
		'menu_id'			=> 'audience-blog-nav',					// Adding custom nav id
		'menu_class'		=> 'blog-nav medium-horizontal menu grid-x grid-padding-x align-center small-up-1 medium-up-5',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
		'theme_location'	=> 'audience-blog-nav',					// Where it's located in the theme
		'depth'				=> 5,							// Limit the depth of the nav
		'fallback_cb'		=> false,						// Fallback function (see below)
		'add_li_class'      => 'cell',
		'link_before'       => '<span>',
		'link_after'        => '</span>',
		'walker'			=> new Topbar_Menu_Walker()
	));
}

// Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
class Topbar_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu\">\n";
	}
}

class Full_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"menu grid-x\">\n";
	}
}

// The Off Canvas Menu
function joints_off_canvas_nav() {
	wp_nav_menu(array(
		'container'			=> false,							// Remove nav container
		'menu_id'			=> 'offcanvas-nav',					// Adding custom nav id
		'menu_class'		=> 'vertical menu accordion-menu',	// Adding custom nav class
		'items_wrap'		=> '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
		'theme_location'	=> 'offcanvas-nav',					// Where it's located in the theme
		'depth'				=> 5,								// Limit the depth of the nav
		'fallback_cb'		=> false,							// Fallback function (see below)
		'walker'			=> new Off_Canvas_Menu_Walker()
	));
}

class Off_Canvas_Menu_Walker extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = Array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

// The Footer Menu
function joints_footer_links() {
	wp_nav_menu(array(
		'container'			=> 'false',				// Remove nav container
		'menu_id'			=> 'footer-links',		// Adding custom nav id
		'menu_class'		=> 'menu',				// Adding custom nav class
		'theme_location'	=> 'footer-links',		// Where it's located in the theme
		'depth'				=> 0,					// Limit the depth of the nav
		'fallback_cb'		=> ''					// Fallback function
	));
} /* End Footer Menu */

// Header Fallback Menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home'		=> true,
		'menu_class'	=> '',		// Adding custom nav class
		'include'		=> '',
		'exclude'		=> '',
		'echo'			=> true,
		'link_before'	=> '',		// Before each link
		'link_after'	=> ''		// After each link
	));
}

// Footer Fallback Menu
function joints_footer_links_fallback() {
	/* You can put a default here if you like */
}

// Add Foundation active class to menu
function required_active_nav_class( $classes, $item ) {
	if ( $item->current == 1 || $item->current_item_ancestor == true ) {
		$classes[] = 'active';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'required_active_nav_class', 10, 2 );