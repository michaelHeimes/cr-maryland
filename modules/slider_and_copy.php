<section class="slider-copy">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php 
			$images = get_sub_field('images');
			if( $images ):?>
			
			    <div class="gallery-slider cell small-12 medium-6">
			        <?php foreach( $images as $image ): ?>
			        
			            <div class="single-slide">
			                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            </div>
			            
			        <?php endforeach; ?>
			    </div>
			    
			<?php endif; ?>
			
			<div class="copy cell small-12 medium-6">
				<?php the_sub_field('copy');?>
			</div>
								
		</div>
	</div>
</section>