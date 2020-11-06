<section class="four-col-numbers-labels">
	<div class="grid-container">
		<div class="grid-x grid-padding-x small-up-2 medium-up-4 text-center">
			
			<?php if( have_rows('column_1') ):?>
				<?php while ( have_rows('column_1') ) : the_row();?>	
			
				<div class="cell">
					<div class="number">
						<?php the_sub_field('number');?>
					</div>
					
					<div class="label-text">
						<?php the_sub_field('label');?>
					</div>
				</div>
						
				<?php endwhile;?>
			<?php endif;?>

			<?php if( have_rows('column_2') ):?>
				<?php while ( have_rows('column_2') ) : the_row();?>	
			
				<div class="cell">
					<div class="number">
						<?php the_sub_field('number');?>
					</div>
					
					<div class="label-text">
						<?php the_sub_field('label');?>
					</div>
				</div>
						
				<?php endwhile;?>
			<?php endif;?>
			
			<?php if( have_rows('column_3') ):?>
				<?php while ( have_rows('column_3') ) : the_row();?>	
			
				<div class="cell">
					<div class="number">
						<?php the_sub_field('number');?>
					</div>
					
					<div class="label-text">
						<?php the_sub_field('label');?>
					</div>
				</div>
						
				<?php endwhile;?>
			<?php endif;?>
			
			<?php if( have_rows('column_4') ):?>
				<?php while ( have_rows('column_4') ) : the_row();?>	
			
				<div class="cell">
					<div class="number">
						<?php the_sub_field('number');?>
					</div>
					
					<div class="label-text">
						<?php the_sub_field('label');?>
					</div>
				</div>
						
				<?php endwhile;?>
			<?php endif;?>			
		
		</div>
	</div>
</section>