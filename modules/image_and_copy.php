<section class="image-copy module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle">
			
			<?php 
			$image = get_sub_field('image');
			if( !empty( $image ) ): ?>
			<div class="img-wrap cell small-12 tablet-6">
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			</div>
			<?php endif; ?>
			
			<div class="copy cell small-12 tablet-6">
				<div class="inner">
					<?php the_sub_field('copy');?>
				</div>
			</div>
								
		</div>
	</div>
</section>