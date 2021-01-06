<?php 
/**
 * Template Name: Thank You
 *
 * 
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<div class="content-wrap grid-container">
					<div class="grid-x grid-padding-x">
						
						<header class="article-header cell small-12">
						
							<?php the_content();?>
							
							<button class="button bg-invest r-arrow" onclick="goBack()">Go Back</button>
							<script>
								function goBack() {
								window.history.go(-1);
								}
							</script>
							
						</header>
												
					</div>
				</div>			
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>