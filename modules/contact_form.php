<section id="form" class="contact-form bg-buy" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 medium-6">
				<?php if ($copy = get_sub_field('copy')):?>
					<div class="copy-wrap"><?php echo $copy;?></div>
				<?php endif;?>
			</div>

			<div class="right cell small-12 medium-6 tablet-5 tablet-offset-1">
				
				<?php if( get_sub_field('form_enabler') == 'shortcode' ):?>
				
					<?php					
					
					$form_Shortcode =  get_sub_field('form_shortcode');
					
					echo do_shortcode($form_Shortcode);
										
					?>
					
				<?php else:?>
					
					<?php 
						the_sub_field('form_code');				
					?>
				
				<?php endif;?>
				
			</div>
			
		</div>
	</div>
</section>