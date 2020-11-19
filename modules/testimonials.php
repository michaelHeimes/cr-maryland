<section class="testimonials heading-tri-color-copy module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-6 tablet-offset-3">
				<div class="inner">
					
					<?php if( $heading = get_sub_field('heading') ):?>
						<h2 class="text-center tri-bar-heading small-caps"><?php echo $heading; ?></h2>
					<?php endif;?>
					
					<div class="tri-color-bar">
						<span></span>
						<span></span>
						<span></span>						
					</div>
	
					<?php if( have_rows('testimonials') ):?>
					<div class="testimonial-slider">
						<?php while ( have_rows('testimonials') ) : the_row();?>	
						
						<?php if( have_rows('single_testimonial') ):?>
							<?php while ( have_rows('single_testimonial') ) : the_row();?>	
							
							<div class="single-testimonial text-center">
							
								<div class="quote">"<?php the_sub_field('quote');?>"</div>
								
								<div class="author">–<?php the_sub_field('author');?></div>
							
							</div>
						
							<?php endwhile;?>
						<?php endif;?>
					
						<?php endwhile;?>
					</div>
					<?php endif;?>
				
				</div>
			</div>
		</div>
	</div>
</section>