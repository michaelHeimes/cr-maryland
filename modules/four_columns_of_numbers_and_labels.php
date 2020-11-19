<section class="four-col-numbers-labels module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-margin-x small-up-2 medium-up-4 text-center">
			
			<?php if( have_rows('column_1') ):?>
				<?php while ( have_rows('column_1') ) : the_row();?>	
			
				<div class="cell">
					<div class="number weight-bold">
						<?php the_sub_field('number');?>
					</div>
					
					<div class="label-text weight-bold">
						<?php the_sub_field('label');?>
					</div>
				</div>
						
				<?php endwhile;?>
			<?php endif;?>

			<?php if( have_rows('column_2') ):?>
				<?php while ( have_rows('column_2') ) : the_row();?>	
			
				<div class="cell">
					<div class="number weight-bold">
						<?php the_sub_field('number');?>
					</div>
					
					<div class="label-text weight-bold">
						<?php the_sub_field('label');?>
					</div>
				</div>
						
				<?php endwhile;?>
			<?php endif;?>
			
			<?php if( have_rows('column_3') ):?>
				<?php while ( have_rows('column_3') ) : the_row();?>	
			
				<div class="cell">
					<div class="number weight-bold">
						<?php the_sub_field('number');?>
					</div>
					
					<div class="label-text weight-bold">
						<?php the_sub_field('label');?>
					</div>
				</div>
						
				<?php endwhile;?>
			<?php endif;?>
			
			<?php if( have_rows('column_4') ):?>
				<?php while ( have_rows('column_4') ) : the_row();?>	
			
				<div class="cell">
					<div class="number weight-bold">
						<?php the_sub_field('number');?>
					</div>
					
					<div class="label-text weight-bold">
						<?php the_sub_field('label');?>
					</div>
				</div>
						
				<?php endwhile;?>
			<?php endif;?>			
		
		</div>
	</div>
</section>