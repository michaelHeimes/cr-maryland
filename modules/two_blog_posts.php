<section class="two-blog-posts">
	<div class="grid-container">
		
		<div class="top grid-x grid-padding-x">
			
			<div class="cell shrink logo-wrap">
				
				<?php $theme = get_field('page_theme');?>
					
				<?php if ($theme == 'invest'):?>
				
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-yellow.svg" alt="logo-round-yellow" />
					
				<?php elseif($theme == 'sell'):?>

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-white.svg" alt="logo-round-white" />

				<?php elseif($theme == 'rent'):?>

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-red.svg" alt="logo-round-red" />
					
				<?php elseif($theme == 'buy'):?>

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-black.svg" alt="logo-round-black" />

				<?php elseif($theme == 'community'):?>

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-gray.svg" alt="logo-round-gray" />
					
				<?php endif;?>
				
			</div>
			
			<h2 class="cell shrink">Blog</h2>
			
		</div>
			
		<?php
		$featured_posts = get_sub_field('posts');
		if( $featured_posts ): ?>
		<div class="grid-x grid-padding-x">
		    <?php foreach( $featured_posts as $post ): 
		        setup_postdata($post); ?>

				<?php get_template_part( 'parts/loop', 'archive' ); ?>

		    <?php endforeach; ?>
		</div>
		    <?php 
		    // Reset the global post object so that the rest of the page works correctly.
		    wp_reset_postdata(); ?>
		<?php endif; ?>
				
	</div>
</section>