<?php
/**
 * Template part for displaying a single post
 */
 $theme = get_field('page_theme');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header grid-container">	
		<div class="post-theme-label caps weight-bold"><span class="bg-<?php echo $theme;?> weight-bold"><?php the_field('page_theme');?></span></div>
		<div class="date-wrap weight-bold caps"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></div>
		<h1 class="entry-title single-title cell small-12" itemprop="headline"><?php the_title(); ?></h1>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	    
	    <?php get_template_part( 'parts/loop', 'modules' ); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer grid-container">
		<div class="divider"></div>
		
		<h3 class="cell small-12 text-center caps weight-bold">Share This Article</h3>
		
		
	<div class="a2a_kit a2a_default_style grid-x grid-padding-x align-center">
	    <a class="a2a_button_facebook">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/FB-logo.svg" alt="facebook-logo" />
	    </a>
	    <a class="a2a_button_linkedin">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin-logo.svg" alt="linkedin-logo" />
	    </a>
	    <a class="a2a_button_twitter">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-logo.svg" alt="twitter-logo" />
	    </a>
	</div>

	<script async src="https://static.addtoany.com/menu/page.js"></script>
		
		
	</footer> <!-- end article footer -->
																			
</article> <!-- end article -->