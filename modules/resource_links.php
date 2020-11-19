<section class="resource-links bg-rent module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="left cell small-12 medium-6">
				
				<?php if( $heading = get_sub_field('heading') ):?>
					<h2><?php echo $heading;?></h2>
				<?php endif;?>
				
			</div>
				
			<div class="right cell small-12 medium-6">
							
				<?php if( have_rows('links') ):?>
					<?php while ( have_rows('links') ) : the_row();?>	
			
						<?php if( have_rows('single_link') ):?>
							<?php while ( have_rows('single_link') ) : the_row();?>	
							
							<?php 
							$link = get_sub_field('link');
						    $link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						    ?>
							
							<div class="single-row icon-text-row">
								
								<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
								
									<div class="icon-wrap">
										<?php 
										$image = get_sub_field('icon');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
									
									<div class="label-wrap weight-black">			
										<?php echo esc_html( $link_title ); ?>
									</div>
								
								</a>
								
							</div>
						
							<?php endwhile;?>
						<?php endif;?>
				
					<?php endwhile;?>
				<?php endif;?>
				
			</div>
		</div>
	</div>
</section>