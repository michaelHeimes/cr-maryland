<section class="contact-form">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 medium-6">
				<?php if ($copy = get_field('gf_copy', 'option')):?>
					<div class="copy-wrap"><?php echo $copy;?></div>
				<?php endif;?>
			</div>

			<div class="right cell small-12 medium-6 tablet-5 tablet-offset-1">
				<?php the_field('gf_form_code', 'option');?>
			</div>
			
		</div>
	</div>
</section>