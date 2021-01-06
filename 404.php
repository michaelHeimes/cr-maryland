<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
			
	<div class="content">

		<div class="inner-content grid-x grid-padding-x">
	
			<main class="main cell small-12" role="main">

				<article class="content-not-found">
				
					<header class="article-header">
						<h1><?php the_field('not_found_heading', 'options');?></h1>
						<?php the_field('not_found_copy', 'options');?>
					</header> <!-- end article header -->
			
				</article> <!-- end article -->
	
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>