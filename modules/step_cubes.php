<section class="step-cubes module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				
				<?php $theme = get_field('page_theme');?>

				<?php if ($copy = get_sub_field('copy')):?>
					<div class="copy-wrap"><?php echo $copy;?></div>
				<?php endif;?>

			</div>
			
		</div>

		<div class="cubes-wrap grid-x grid-padding-x small-up-1 <?php if( get_sub_field('number_of_cubes') == 'four' ):?>medium-up-4<?php else:?>medium-up-3<?php endif;?>" data-equalizer data-equalize-on="medium">

			<?php if( have_rows('cube_1') ):?>
				<?php while ( have_rows('cube_1') ) : the_row();?>	
				
				<div class="single-cube cell">
					
					<div class="inner bg-<?php echo $theme;?>">
					
						<div class="step caps weight-bold">Step 1</div>
						
						<?php if( $cube_text = get_sub_field('cube_text') ):?>
							<div class="cube-text weight-black"><?php echo $cube_text; ?></div>
						<?php endif;?>
												
					</div>
					
					<?php if( $copy_below_the_cube = get_sub_field('copy_below_the_cube') ):?>
					<div class="copy-wrap" data-equalizer-watch>
						<p><?php echo $copy_below_the_cube; ?></p>
					</div>
					<?php endif;?>
					
				</div>
				
				<?php endwhile;?>
			<?php endif;?>

			<?php if( have_rows('cube_2') ):?>
				<?php while ( have_rows('cube_2') ) : the_row();?>	
				
				<div class="single-cube cell">
					
					<div class="inner bg-<?php echo $theme;?>">
					
						<div class="step caps weight-bold">Step 2</div>
						
						<?php if( $cube_text = get_sub_field('cube_text') ):?>
							<div class="cube-text weight-black"><?php echo $cube_text; ?></div>
						<?php endif;?>
						
					</div>
					
					<?php if( $copy_below_the_cube = get_sub_field('copy_below_the_cube') ):?>
					<div class="copy-wrap" data-equalizer-watch>
						<p><?php echo $copy_below_the_cube; ?></p>
					</div>
					<?php endif;?>
					
				</div>
				
				<?php endwhile;?>
			<?php endif;?>
			
			<?php if( have_rows('cube_3') ):?>
				<?php while ( have_rows('cube_3') ) : the_row();?>	
				
				<div class="single-cube cell">
					
					<div class="inner bg-<?php echo $theme;?>">
					
						<div class="step caps weight-bold">Step 3</div>
						
						<?php if( $cube_text = get_sub_field('cube_text') ):?>
							<div class="cube-text weight-black"><?php echo $cube_text; ?></div>
						<?php endif;?>
											
					</div>
					
					<?php if( $copy_below_the_cube = get_sub_field('copy_below_the_cube') ):?>
					<div class="copy-wrap" data-equalizer-watch>
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
						
						<div class="inner bg-<?php echo $theme;?>">
						
							<div class="step caps weight-bold">Step 4</div>
							
							<?php if( $cube_text = get_sub_field('cube_text') ):?>
								<div class="cube-text weight-black"><?php echo $cube_text; ?></div>
							<?php endif;?>
							
						</div>
						
						<?php if( $copy_below_the_cube = get_sub_field('copy_below_the_cube') ):?>
						<div class="copy-wrap" data-equalizer-watch>
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