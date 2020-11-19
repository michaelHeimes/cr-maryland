<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="top cell small-12">
								<div class="spaced grid-x grid-padding-x">
									
									<ul class="menu cell shrink">
										<li><a href="<?php echo home_url(); ?>">
												<span class="show-for-sr"><?php bloginfo('name'); ?></span>
												<?php 
												$image = get_field('footer_logo', 'option');
												if( !empty( $image ) ): ?>
												    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
										</a></li>
									</ul>
									
									<div class="location cell shrink">
										<h5>Location</h5>
										
										<div>
											<a href="<?php the_field('directions_link', 'option');?>" target="_blank">
												<?php the_field('contact_address', 'option');?>
											</a>
										</div>
										
									</div>

									<div class="contact cell shrink">
										<h5>Contact</h5>
										
										<div>
											<a href="mailto:<?php the_field('contact_email_address', 'option');?>"><?php the_field('contact_email_address', 'option');?></a>
										</div>
										
										<div>
											<a href="tel:<?php the_field('contact_phone_number', 'option');?>"><?php the_field('contact_phone_number', 'option');?></a>
										</div>
										
									</div>
									
									<div class="social cell shrink">
										
										<div>
											<a href="<?php the_field('sm_facebook_url', 'option');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-FB-logo.svg" alt="facebook-logo" /></a>
										</div>
										
										<div>
											<a href="<?php the_field('instagram_url', 'option');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-IG-logo.svg" alt="instagram-logo" /></a>
										</div>
										
										<div>
											<a href="<?php the_field('twitter_url', 'option');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-twitter-logo.svg" alt="twitter-logo" /></a>
										</div>
										
										<div>
											<a href="<?php the_field('youtube_url', 'option');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-youtube-logo.svg" alt="youtube-logo" /></a>
										</div>
																				
									</div>
			    					
								</div>
		    				</div>
							
							<div class="bottom cell small-12">
								<div class="grid-x grid-padding-x">
									
									<div class="top cell small">
										
										<div class="grid-x grid-padding-x">
											
											<?php if( have_rows('footer_associated_logos', 'option') ):?>
												<?php while ( have_rows('footer_associated_logos', 'option') ) : the_row();?>	

													<?php 
													$image = get_sub_field('single_logo');
													if( !empty( $image ) ): ?>
													<div class="cell shrink">
													    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													</div>
													<?php endif; ?>
												
												<?php endwhile;?>
											<?php endif;?>
											
										</div>
									</div>
									
								</div>
								
								<div class="spaced grid-x grid-padding-x">
									
									<div class="left cell small-12 medium-shrink">
										<div class="grid-x grid-padding-x">
											
											<div class="disclaimers cell small-12">
												<?php the_field('footer_disclaimers', 'option');?>
											</div>
											
										</div>
										
									</div>

									<div class="copyright right cell small-12 medium-shrink">
										<span><?php the_field('footer_copyright', 'option');?></span> | <a href="https://proprdesign.com/" target="_blank">Designed by Propr</a>
									</div>
									
								</div>
							</div>
													
						</div> <!-- end #inner-footer -->
						
					</div>
					
					<div class="bar"><span></span><span></span><span></span><span></span></div>		
			
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->