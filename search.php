<?php 
/**
 * The template for displaying search results pages
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 */
 	
get_header(); ?>
			
	<div class="content">
		<div class="grid-container">
			
			<div class="inner-content grid-x grid-padding-x">
		
				<main class="main cell small-12" role="main">
					<header class="template-banner">
						<div class="press-label caps weight-bold">Search Results For:</div>
						<h1 class="archive-title"><?php echo esc_attr(get_search_query()); ?></h1>
					</header>
	
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				 
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'search' ); ?>
					    
					<?php endwhile; ?>	
	
						<?php joints_page_navi(); ?>
						
					<?php else : ?>
					
						<?php get_template_part( 'parts/content', 'missing' ); ?>
							
				    <?php endif; ?>
		
			    </main> <!-- end #main -->
					
			</div> <!-- end #inner-content -->
			
		</div>

	</div> <!-- end #content -->

<?php get_footer(); ?>
