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
		<header class="article-header banner">
	    <?php foreach( $featured_posts as $post ): 
	        setup_postdata($post); ?>
	        
	        <?php $theme = get_field('page_theme');?>
	        	        
	        <?php
	        	$banner_imgID = get_field('image_for_featured_post_banner');
	        	$banner_imgSize = "audience-banner-img";
	        	$banner_imgArr = wp_get_attachment_image_src( $banner_imgID, $banner_imgSize );
	        		        	
	        ?>
			<div class="left" style="background-image: url(<?php echo $banner_imgArr[0]; ?> );">
				
			</div>
		        
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
			
					<div class="right cell small-12 tablet-8 tablet-offset-4">
					
						<div class="post-theme-label caps weight-bold"><span class="bg-<?php echo $theme;?>" weight-bold><?php echo $theme;?></span></div>
						
								<div class="cell-12 date-wrap caps weight-bold"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></div>

							
							<h1 class="page-title"><?php the_title(); ?></h1>
						
						<a class="button r-arrow" href="<?php the_permalink() ?>" rel="bookmark">Read More</a>
						
					</div>
					
				</div>
			</div>
					
			<div class="nav-wrap blog-nav grid-container">
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
			    <div class="grid-x grid-padding-x">
				    
				    <div class="cell small-12">
					    
						<?php $theme = get_field('page_theme');?>
									
						<?php if ($theme == 'invest'):?>
						
							<div class="blog-cat-title">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-yellow.svg" alt="logo-round-yellow" />
								<h2>Invest</h2>
							</div>
						
						<?php elseif ($theme == 'sell'):?>
		
							<div class="blog-cat-title">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-white.svg" alt="logo-round-white" />
								<h2>Sell</h2>
							</div>
									
						<?php elseif ($theme == 'rent'):?>
						
							<div class="blog-cat-title">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-red.svg" alt="logo-round-red" />
								<h2>Rent</h2>
							</div>
		
						<?php elseif ($theme == 'buy'):?>
						
							<div class="blog-cat-title">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-black.svg" alt="logo-round-black" />
								<h2>Buy</h2>
							</div>
		
						<?php elseif ($theme == 'community'):?>
						
							<div class="blog-cat-title">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-gray.svg" alt="logo-round-gray" />
								<h2>Community</h2>
							</div>
		
						<?php endif;?>
					
				    </div>
			    
				    <div class="cell small-12">
				    
					<?php
					$theme = get_field('page_theme');
					$featured_post = get_field('featured_post', false, false);
					$post__not_in = ($featured_post) ? implode(',', $featured_post) : '';  						
						echo do_shortcode('[ajax_load_more container_type="div" post_type="post" posts_per_page="10" meta_key="page_theme" meta_value="' . $theme . '" meta_compare="IN" post__not_in="' . $post__not_in . '" scroll="false" transition_container_classes="grid-x grid-padding-x align-justify" button_label="Load More Posts" button_loading_label="Loading More Posts"]');
					?>		
					
				    </div>	
				    
			    </div>			
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->
	
	
</article>

<?php get_footer(); ?>






