<?php 
/**
 * Template Name: Contact Page
 *
 * 
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<div class="content-wrap grid-container">
					<div class="grid-x grid-padding-x">
						
						<header class="template-banner cell small-12">
						
							<div class="press-label caps weight-bold">Contact</div>
							
							<h1><?php the_field('page_heading');?></h1>
							<p><span class="large-copy"><?php the_field('sub-heading');?></span></p>
							
						</header>
						
						<div class="left cell small-12 medium-6 large-4">
							
							<div class="row">
								<h2>Location</h2>
								<div class="weight-bold"><?php the_field('contact_address', 'option');?></div>
								<a class="button r-arrow caps" href="<?php the_field('directions_link', 'option');?>" target="_blank">Get Directions</a>
							</div>	
													
							<div class="row">
								<h2>Email</h2>
								<div class="weight-bold"><?php the_field('contact_email_address', 'option');?></div>
								<a class="button r-arrow caps" href="mailto:<?php the_field('contact_email_address', 'option');?>" target="_blank">Email Us</a>
							</div>								
							
							<div class="row">
								<h2>Phone</h2>
								<div class="weight-bold"><?php the_field('contact_phone_number', 'option');?></div>
								<a class="button r-arrow caps" href="<?php the_field('directions_link', 'option');?>" target="_blank">Call Us</a>
							</div>	
							
						</div>

						<div class="right cell small-12 medium-6 large-7 large-offset-1">
							
							<?php the_field('map_embed_code');?>
							
						</div>
						
					</div>
				</div>
			
			
				<?php get_template_part( 'parts/loop', 'modules' ); ?>
			
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>