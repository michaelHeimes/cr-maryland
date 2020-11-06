<section class="testimonials">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 tablet-6 tablet-offset-3">
				<div class="inner">
					
					<?php if( $heading = get_sub_field('heading') ):?>
						<h2 class="text-center"><?php echo $heading; ?></h2>
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
							
							<div class="quote"><?php the_sub_field('quote');?></div>
							
							<div class="author"><?php the_sub_field('author');?></div>
						
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