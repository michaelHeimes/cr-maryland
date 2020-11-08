<?php 
/**
 * Template Name: Press Page
 *
 * 
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
			<div class="banner">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						
						
						
						<div class="left cell small-12 medium-6 large-7">
							
							<?php 
							$image = get_field('banner_left_image');
							if( !empty( $image ) ): ?>
							<div class="img-wrap">
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<?php endif; ?>
							
							<div class="text-wrap">
								
								<h1><?php the_field('banner_left_heading');?></h1>
								
								<?php if( have_rows('banner_left_links') ):?>
									<?php while ( have_rows('banner_left_links') ) : the_row();?>	
									
									<?php 
									$link = get_sub_field('single_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button bg-invest r-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								
									<?php endwhile;?>
								<?php endif;?>
								
							</div>
							
						</div>

						<div class="right cell small-12 medium-6 large-5">
							
							<?php 
							$image = get_field('banner_right_image');
							if( !empty( $image ) ): ?>
							<div class="img-wrap">
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<?php endif; ?>
							
							<div class="text-wrap">
								
								<h1><?php the_field('banner_right_heading');?></h1>
								
								<?php if( have_rows('banner_right_links') ):?>
									<?php while ( have_rows('banner_left_links') ) : the_row();?>	
									
									<?php 
									$link = get_sub_field('single_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button bg-sell r-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								
									<?php endwhile;?>
								<?php endif;?>
								
							</div>
							
						</div>
						
					</div>
				</div>
			</div>		
			
			
			<?php get_template_part('modules/contact_form');?>	
			
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>