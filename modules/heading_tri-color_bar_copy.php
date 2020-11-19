<section class="heading-tri-color-copy module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
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
	
					<?php if ($copy = get_sub_field('copy')):?>
						<div class="copy-wrap text-center"><?php echo $copy;?></div>
					<?php endif;?>
				
				</div>
			</div>
		</div>
	</div>
</section>