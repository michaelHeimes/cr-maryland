<section class="icon-and-text-rows">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				
				<?php if( have_rows('icon_and_text_rows') ):?>
					<?php while ( have_rows('icon_and_text_rows') ) : the_row();?>	
			
						<?php if( have_rows('single_row') ):?>
							<?php while ( have_rows('single_row') ) : the_row();?>	
							
							<div class="single-row icon-text-row">
								
								<div class="icon-wrap">
									<?php 
									$image = get_sub_field('icon');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								
								<div class="label-wrap">
									<?php the_sub_field('text');?>
								</div>
								
							</div>
						
							<?php endwhile;?>
						<?php endif;?>
				
					<?php endwhile;?>
				<?php endif;?>
				
			</div>
		</div>
	</div>
</section>