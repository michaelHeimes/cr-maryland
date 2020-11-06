<section class="faqs">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				
				<?php if ($copy = get_sub_field('copy')):?>
					<div class="copy-wrap"><?php echo $copy;?></div>
				<?php endif;?>

				<?php if( have_rows('faqs') ):$count = 0;?>
				
				<div class="faq-accordion accordion" data-accordion>
					<?php while ( have_rows('faqs') ) : the_row();?>	
					
						<?php if( have_rows('single_faq') ):?>
							<?php while ( have_rows('single_faq') ) : the_row();?>	
							
					<div class="accordion-item <?php if (!$count):?>is-active<?php endif;?>" data-accordion-item>
						
						<a href="#" class="accordion-title"><h3><span class="highlighter"><?php the_sub_field('question');?></span></h3></a>
						
						<div class="accordion-content" data-tab-content>
							<p><?php the_sub_field('answer');?></p>
						</div>
						
					</div>
						
							<?php endwhile;?>
						<?php endif;?>
						
					<?php $count++; endwhile;?>
				</div>
				<?php endif;?>

			</div>
		</div>
	</div>
</section>