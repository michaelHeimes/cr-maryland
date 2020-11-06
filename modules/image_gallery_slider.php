<section class="image-gallery-slider">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">

			<?php 
			$images = get_sub_field('images');
			if( $images ): $count = 1;?>
			    <div class="gallery-slider">
			        <?php foreach( $images as $image ): ?>
			        
			        	<?php if($count % 2 == 0):?>
			        
			            <div class="single-slide">
			                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            </div>
			            
			            <?php else:?>
			            
			            <div class="single-slide">
			                <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            </div>
			            
			            <?php endif;?>    
			            
			             <?php $count++; ?>       
			            
			            
			        <?php endforeach; ?>
			    </div>
			<?php endif; ?>
								
			</div>
		</div>
	</div>
</section>