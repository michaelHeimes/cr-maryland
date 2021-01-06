<?php 
/**
 * Template Name: Press Page
 *
 * 
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
			<div class="template-banner">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">						
						
						<div class="cell small-12">
							
							<div class="press-label caps weight-bold">Press</div>
							<h1 class="weight-black"><?php the_field('press_page_heading');?></h1>
							<div class="copy-wrap"><?php the_field('page_sub-heading');?></div>
						</div>
						
					</div>
				</div>
			</div>		
			
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="press-feed-wrap cell small-12">
						
						<?php 						
							echo do_shortcode('[ajax_load_more container_type="div" post_type="press_post" posts_per_page="5" scroll="false" transition_container_classes="press-feed grid-x grid-padding-x" button_label="Load More Posts" button_loading_label="Loading More Posts"]');
						?>	
					
					</div>
				</div>
			</div>
			
			<?php get_template_part('modules/contact_form');?>	
			
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>