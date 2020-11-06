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
		
		        // Setup this post for WP functions (variable must be named $post).
		        setup_postdata($post); ?>
				<div class="cell small-12 medium-6">
					<div class="inner">

						<div class="img-wrap">
							<?php $image = get_field('image_for_archives');
							$image_size = 'blog-thumb';
							$image_url = $image['sizes'][$image_size];
							if($image): //dont output an empty image tag ?>
								<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['blog-thumb-width']; ?>" height="<?php echo $image['sizes']['blog-thumb-height']; ?>" alt="<?php echo $image['caption']; ?>" />
							<?php endif; ?>
						</div>
					
						<h3><?php the_title(); ?></h3>
				        <a href="<?php the_permalink(); ?>">Read More</a>
			        
					</div>			            
		        </div>
		    <?php endforeach; ?>
		</div>
		    <?php 
		    // Reset the global post object so that the rest of the page works correctly.
		    wp_reset_postdata(); ?>
		<?php endif; ?>
				
	</div>
</section>