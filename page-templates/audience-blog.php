<?php 
/**
 * Template Name: Audience Blog Page
 *
 *
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
								
	<?php
	$featured_posts = get_field('featured_post');
	if( $featured_posts ): ?>
		<header class="article-header">
	    <?php foreach( $featured_posts as $post ): 
	        setup_postdata($post); ?>
	        
	        <?php $theme = get_field('page_theme');?>
	        	        
	        <?php
	        	$imgID = get_field('image_for_featured_post_banner');
	        	$imgSize = "full";
	        	$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
	        ?>
			<div class="left" style="background-image: url(<?php echo $banner_imgArr[0]; ?> );" style="background-image: url(<?php echo $imgArr[0]; ?> );">
				
			</div>
		        
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
			
					<div class="right cell small-12 tablet-8 tablet-offset-4">
					
						<div class="post-theme-label"><span class="highlighter"><?php echo $theme;?></span></div>
							
							<h1 class="page-title"><?php the_title(); ?></h1>
						
						<a class="button r-arrow" href="<?php the_permalink() ?>" rel="bookmark">Read More</a>
						
					</div>
					
				</div>
			</div>
					
			<div class="nav-wrap grid-container">
				<?php joints_audience_blog_nav();?>
			</div>		
	        
	    <?php endforeach; ?>
		</header>
	    <?php 
	    // Reset the global post object so that the rest of the page works correctly.
	    wp_reset_postdata(); ?>
	<?php endif; ?>		

	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main grid-container" role="main">

				<?php
				$theme = get_field('page_theme');
				$featured_post = get_field('featured_post', false, false);
				$post__not_in = ($featured_post) ? implode(',', $featured_post) : '';  						
					echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="10" meta_key="page_theme" meta_value="' . $theme . '" meta_compare="IN" post__not_in="' . $post__not_in . '" scroll="false" transition_container_classes="grid-x grid-padding-x" button_label="Load More Posts" button_loading_label="Loading More Posts"]');
				?>						
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
	
	
</article>

<?php get_footer(); ?>