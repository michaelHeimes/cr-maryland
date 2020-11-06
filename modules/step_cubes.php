<section class="step-cubes">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">

				<?php if ($copy = get_sub_field('copy')):?>
					<div class="copy-wrap"><?php echo $copy;?></div>
				<?php endif;?>

			</div>
			
		</div>

		<div class="cubes-wrap grid-x grid-padding-x small-up-1 <?php if( get_sub_field('number_of_cubes') == 'four' ):?>medium-up-4<?php else:?>medium-up-3<?php endif;?>">

			<?php if( have_rows('cube_1') ):?>
				<?php while ( have_rows('cube_1') ) : the_row();?>	
				
				<div class="single-cube cell">
					
					<div class="step">Step 1</div>
					
					<?php if( $cube_text = get_sub_field('cube_text') ):?>
						<div class="cube-text"><?php echo $cube_text; ?></div>
					<?php endif;?>
					
					<?php if( $copy_below_the_cube = get_sub_field('copy_below_the_cube') ):?>
					<div class="copy-wrap">
						<p><?php echo $copy_below_the_cube; ?></p>
					</div>
					<?php endif;?>
					
				</div>
				
				<?php endwhile;?>
			<?php endif;?>

			<?php if( have_rows('cube_2') ):?>
				<?php while ( have_rows('cube_2') ) : the_row();?>	
				
				<div class="single-cube cell">
					
					<div class="step">Step 2</div>
					
					<?php if( $cube_text = get_sub_field('cube_text') ):?>
						<div class="cube-text"><?php echo $cube_text; ?></div>
					<?php endif;?>
					
					<?php if( $copy_below_the_cube = get_sub_field('copy_below_the_cube') ):?>
					<div class="copy-wrap">
						<p><?php echo $copy_below_the_cube; ?></p>
					</div>
					<?php endif;?>
					
				</div>
				
				<?php endwhile;?>
			<?php endif;?>
			
			<?php if( have_rows('cube_3') ):?>
				<?php while ( have_rows('cube_3') ) : the_row();?>	
				
				<div class="single-cube cell">
					
					<div class="step">Step 3</div>
					
					<?php if( $cube_text = get_sub_field('cube_text') ):?>
						<div class="cube-text"><?php echo $cube_text; ?></div>
					<?php endif;?>
					
					<?php if( $copy_below_the_cube = get_sub_field('copy_below_the_cube') ):?>
					<div class="copy-wrap">
						<p><?php echo $copy_below_the_cube; ?></p>
					</div>
					<?php endif;?>
					
				</div>
				
				<?php endwhile;?>
			<?php endif;?>
			
			<?php if( get_sub_field('number_of_cubes') == 'four' ):?>
			
				<?php if( have_rows('cube_4') ):?>
					<?php while ( have_rows('cube_4') ) : the_row();?>	
					
					<div class="single-cube cell">
						
						<div class="step">Step 4</div>
						
						<?php if( $cube_text = get_sub_field('cube_text') ):?>
							<div class="cube-text"><?php echo $cube_text; ?></div>
						<?php endif;?>
						
						<?php if( $copy_below_the_cube = get_sub_field('copy_below_the_cube') ):?>
						<div class="copy-wrap">
							<p><?php echo $copy_below_the_cube; ?></p>
						</div>
						<?php endif;?>
						
					</div>
					
					<?php endwhile;?>
				<?php endif;?>
			
			<?php endif;?>
						
		</div>
		
	</div>
</section>