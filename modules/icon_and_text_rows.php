<section class="icon-and-text-rows module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
				
				<?php if( have_rows('icon_and_text_rows') ):?>
					<?php while ( have_rows('icon_and_text_rows') ) : the_row();?>	
			
						<?php if( have_rows('single_row') ):?>
							<?php while ( have_rows('single_row') ) : the_row();?>	
							
							<div class="single-row icon-text-row cell small-12 medium-6">
								
								<div class="icon-wrap text-center">
									<?php 
									$image = get_sub_field('icon');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								
								<div class="label-wrap weight-black">
									<?php the_sub_field('text');?>
								</div>
								
							</div>
						
							<?php endwhile;?>
						<?php endif;?>
				
					<?php endwhile;?>
				<?php endif;?>
				
		</div>
	</div>
</section>