<?php 
/**
 * Template Name: Home Page
 *
 * 
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
			<div class="banner">
				<div class="grid-container">
					<div class="grid-x grid-padding-x align-middle">
						
						
						
						<div class="left cell small-12 medium-6 large-9">
							
							<?php 
							$image = get_field('banner_left_image');
							if( !empty( $image ) ): ?>
							<div class="img-wrap">
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<?php endif; ?>
							
							<div class="text-wrap left">
								
								<h1 class="left-heading weight-black">
									<span class="bg-invest"><?php the_field('banner_left_heading_l1');?></span><br>
									<span class="bg-invest"><?php the_field('banner_left_heading_l2');?></span>
								</h1>
								
								<?php if( have_rows('banner_left_links') ):?>
									<?php while ( have_rows('banner_left_links') ) : the_row();?>	
									
									<?php 
									$link = get_sub_field('single_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button bg-invest r-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								
									<?php endwhile;?>
								<?php endif;?>
								
							</div>
							
							<div class="text-wrap right show-for-tablet">
								
								<h1 class="right-heading weight-black">
									<span class="bg-sell"><?php the_field('banner_right_heading_l1');?></span><br>
									<span class="bg-sell"><?php the_field('banner_right_heading_l2');?></span>
								</h1>
								
								<?php if( have_rows('banner_right_links') ):?>
									<?php while ( have_rows('banner_left_links') ) : the_row();?>	
									
									<?php 
									$link = get_sub_field('single_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button bg-sell r-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								
									<?php endwhile;?>
								<?php endif;?>
								
							</div>

							
						</div>

						<div class="right cell small-12 medium-6 large-auto">
							
							<?php 
							$image = get_field('banner_right_image');
							if( !empty( $image ) ): ?>
							<div class="img-wrap">
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<?php endif; ?>
							
							<div class="text-wrap hide-for-tablet">
								
								<h1 class="right-heading weight-black">
									<span class="bg-sell"><?php the_field('banner_right_heading_l1');?></span><br>
									<span class="bg-sell"><?php the_field('banner_right_heading_l2');?></span>
								</h1>
								
								<?php if( have_rows('banner_right_links') ):?>
									<?php while ( have_rows('banner_left_links') ) : the_row();?>	
									
									<?php 
									$link = get_sub_field('single_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button bg-sell r-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>
								
									<?php endwhile;?>
								<?php endif;?>
								
							</div>
							
						</div>
						
					</div>
				</div>
			</div>		
			
			
			<?php
				$imgID = get_field('s1_background_image');
				$imgSize = "full";
				$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
			
			?>
			<section class="s1" style="background-image: url(<?php echo $imgArr[0]; ?> );">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">		
						
						<div class="cell small-12 medium-10 medium-offset-1 tablet-8 tablet-offset-2 text-center">
							<h2 class="small-caps"><?php the_field('s1_heading');?></h2>
							<div class="copy-wrap"><?php the_field('s1_copy');?></div>
							
							<?php 
							$link = get_field('s1_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <a class="cta-link caps weight-bold" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							<?php endif; ?>
							
							<?php if( have_rows('four_square_navigation') ):?>
							<nav class="four-square grid-x grid-padding-x small-up-1 medium-up-2">
								<?php while ( have_rows('four_square_navigation') ) : the_row();?>	
								
								
								<?php if( have_rows('top_left') ):?>
									<?php while ( have_rows('top_left') ) : the_row();?>	
									
									<?php $theme = get_sub_field('theme');?>
									
									<?php
										$imgID = get_sub_field('background_image');
										$imgSize = "full";
										$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
									
									?>
																		
									<a class="cell bg-<?php echo $theme;?> text-left" href="<?php the_sub_field('page_link'); ?>" style="background-image: url(<?php echo $imgArr[0]; ?> );">
										
										<div class="mask bg-<?php echo $theme;?>"></div>
										
										<div class="theme-label caps weight-black">
										<?php 
											
											if ($theme == 'invest') {
												echo 'invest';
											}
											elseif ($theme == 'sell') {
												echo 'sell';
											}
							
											elseif ($theme == 'rent') {
												echo 'rent';
											}
											
											elseif ($theme == 'buy') {
												echo 'buy';
											}
											
										?>										
										</div>
										
										<h3 class="weight-black"><?php the_sub_field('heading');?></h3>
										
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/r-arrow-black.svg" alt="r-arrow-black" />
										
									</a>
								
									<?php endwhile;?>
								<?php endif;?>

								<?php if( have_rows('top_right') ):?>
									<?php while ( have_rows('top_right') ) : the_row();?>	
									
									<?php $theme = get_sub_field('theme');?>
									
									<?php
										$imgID = get_sub_field('background_image');
										$imgSize = "full";
										$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
									
									?>
																		
									<a class="cell bg-<?php echo $theme;?> text-left" href="<?php the_sub_field('page_link'); ?>" style="background-image: url(<?php echo $imgArr[0]; ?> );">
										
										<div class="mask bg-<?php echo $theme;?>"></div>
										
										<div class="theme-label caps weight-black">
										<?php $theme = get_sub_field('theme');
											
											if ($theme == 'invest') {
												echo 'invest';
											}
											elseif ($theme == 'sell') {
												echo 'sell';
											}
							
											elseif ($theme == 'rent') {
												echo 'rent';
											}
											
											elseif ($theme == 'buy') {
												echo 'buy';
											}
											
										?>										
										</div>
										
										<h3 class="weight-black"><?php the_sub_field('heading');?></h3>
										
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/r-arrow-black.svg" alt="r-arrow-black" />
										
									</a>
								
									<?php endwhile;?>
								<?php endif;?>
								
								<?php if( have_rows('bottom_left') ):?>
									<?php while ( have_rows('bottom_left') ) : the_row();?>	
									
									<?php $theme = get_sub_field('theme');?>
									
									<?php
										$imgID = get_sub_field('background_image');
										$imgSize = "full";
										$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
									
									?>
																		
									<a class="cell bg-<?php echo $theme;?> text-left" href="<?php the_sub_field('page_link'); ?>" style="background-image: url(<?php echo $imgArr[0]; ?> );">
										
										<div class="mask bg-<?php echo $theme;?>"></div>
										
										<div class="theme-label caps weight-black">
										<?php $theme = get_sub_field('theme');
											
											if ($theme == 'invest') {
												echo 'invest';
											}
											elseif ($theme == 'sell') {
												echo 'sell';
											}
							
											elseif ($theme == 'rent') {
												echo 'rent';
											}
											
											elseif ($theme == 'buy') {
												echo 'buy';
											}
											
										?>										
										</div>
										
										<h3 class="weight-black"><?php the_sub_field('heading');?></h3>
										
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/r-arrow-white.svg" alt="r-arrow-white" />
																				
									</a>
								
									<?php endwhile;?>
								<?php endif;?>
								
								<?php if( have_rows('bottom_right') ):?>
									<?php while ( have_rows('bottom_right') ) : the_row();?>	
									
									<?php $theme = get_sub_field('theme');?>
									
									<?php
										$imgID = get_sub_field('background_image');
										$imgSize = "full";
										$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
									
									?>
																		
									<a class="cell bg-<?php echo $theme;?> text-left" href="<?php the_sub_field('page_link'); ?>" style="background-image: url(<?php echo $imgArr[0]; ?> );">
										
										<div class="mask bg-<?php echo $theme;?>"></div>
										
										<div class="theme-label caps weight-black">
										<?php $theme = get_sub_field('theme');
											
											if ($theme == 'invest') {
												echo 'invest';
											}
											elseif ($theme == 'sell') {
												echo 'sell';
											}
							
											elseif ($theme == 'rent') {
												echo 'rent';
											}
											
											elseif ($theme == 'buy') {
												echo 'buy';
											}
											
										?>										
										</div>
										
										<h3 class="weight-black"><?php the_sub_field('heading');?></h3>
										
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/r-arrow-white.svg" alt="r-arrow-white" />										
									</a>
								
									<?php endwhile;?>
								<?php endif;?>
								
							
								<?php endwhile;?>
							</nav>
							<?php endif;?>
							
						</div>		
				
					</div>
				</div>
			</section>	
			
			
			<?php
				$imgID2 = get_field('s2_background_image');
				$imgSize2 = "full";
				$imgArr2 = wp_get_attachment_image_src( $imgID2, $imgSize2 );
			
			?>
			<section class="s2" style="background-image: url(<?php echo $imgArr2[0]; ?> );">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">	
						
						<div class="heading-tri-color-copy left cell small-12 medium-6">
							<h2 class="tri-bar-heading small-caps"><?php the_field('s2_heading');?></h2>
							
								<div class="tri-color-bar">
									<span></span>
									<span></span>
									<span></span>						
								</div>
								
								<?php if ($copy = get_field('s2_copy')):?>
									<div class="copy-wrap"><?php echo $copy;?></div>
								<?php endif;?>
								
								<?php 
								$link = get_field('s2_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a class="lm-link caps weight-bold" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
							
						</div>

						<div class="four-col-numbers-labels right cell small-12 medium-6">
							<div class="grid-x grid-margin-x small-up-2 text-center">
							
							<?php if( have_rows('four_sets_numbers_and_labels') ):?>
								<?php while ( have_rows('four_sets_numbers_and_labels') ) : the_row();?>	
								
								<?php if( have_rows('set_1') ):?>
									<?php while ( have_rows('set_1') ) : the_row();?>	
								
									<div class="cell">
										<div class="number weight-bold">
											<?php the_sub_field('number');?>
										</div>
										
										<div class="label-text weight-bold">
											<?php the_sub_field('label');?>
										</div>
									</div>
								
									<?php endwhile;?>
								<?php endif;?>
								
								<?php if( have_rows('set_2') ):?>
									<?php while ( have_rows('set_2') ) : the_row();?>	
								
									<div class="cell">
										<div class="number weight-bold">
											<?php the_sub_field('number');?>
										</div>
										
										<div class="label-text weight-bold">
											<?php the_sub_field('label');?>
										</div>
									</div>
								
									<?php endwhile;?>
								<?php endif;?>
								
								<?php if( have_rows('set_3') ):?>
									<?php while ( have_rows('set_3') ) : the_row();?>	
								
									<div class="cell">
										<div class="number weight-bold">
											<?php the_sub_field('number');?>
										</div>
										
										<div class="label-text weight-bold">
											<?php the_sub_field('label');?>
										</div>
									</div>
								
									<?php endwhile;?>
								<?php endif;?>
								
								<?php if( have_rows('set_4') ):?>
									<?php while ( have_rows('set_4') ) : the_row();?>	
								
									<div class="cell">
										<div class="number weight-bold">
											<?php the_sub_field('number');?>
										</div>
										
										<div class="label-text weight-bold">
											<?php the_sub_field('label');?>
										</div>
									</div>
								
									<?php endwhile;?>
								<?php endif;?>
							
								<?php endwhile;?>
							<?php endif;?>
							
							</div>
						</div>
						
					</div>
				</div>
			</section>		
			
			
			<section class="resource-links bg-rent">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="left cell small-12 medium-6">
							
							<?php if( $heading = get_field('rl_heading') ):?>
								<h2 class="weight-black"><?php echo $heading;?></h2>
							<?php endif;?>
							
						</div>
							
						<div class="right cell small-12 medium-6">
							
							<?php if( have_rows('rl_links') ):?>
								<?php while ( have_rows('rl_links') ) : the_row();?>	
						
									<?php if( have_rows('single_link') ):?>
										<?php while ( have_rows('single_link') ) : the_row();?>	
										
										<?php 
										$link = get_sub_field('link');
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
										
										<div class="single-row icon-text-row">
											
											<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
											
												<div class="icon-wrap text-center">
													<?php 
													$image = get_sub_field('icon');
													if( !empty( $image ) ): ?>
													    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</div>
												
												<div class="label-wrap weight-black text-left">			
													<?php echo esc_html( $link_title ); ?>
												</div>
											
											</a>
											
										</div>
									
										<?php endwhile;?>
									<?php endif;?>
							
								<?php endwhile;?>
							<?php endif;?>
							
						</div>
					</div>
				</div>
			</section>
			
			
			<section class="blog">
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
							
						<div class="blog-cat-title cell small-12">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-black.svg" alt="logo-round-black" />
							<h2 class="weight-black">Blog</h2>
						</div>
						
					</div>
							
							
					<div class="grid-x grid-padding-x blog-container">
						
						<div class="blog-slider cell small-12">
														
							<?php				
						    $args = array(  
						        'post_type' => 'post',
						        'post_status' => 'publish',
						        'posts_per_page' => 999999, 
								'orderby'=> 'date', 
								'order' => 'DESC'
						    );
						
						    $loop = new WP_Query( $args ); 
						        
						    while ( $loop->have_posts() ) : $loop->the_post();?>
						    
						        <?php get_template_part( 'parts/loop', 'archive' ); ?>
						    
						    <?php endwhile;
						    wp_reset_postdata();?>
							
						</div>
						
					</div>
				</div>
			</section>
				
			
			<section class="full-nav on-page">
				<div class="grid-container">
					<?php joints_full_nav(); ?>
					
					<div class="grid-x grid-padding-x">
						<div class="cell small-12">
							<div class="divider"></div>
						</div>
					</div>
					
				</div>
			</section>	
			
			
			<?php get_template_part('modules/contact_form');?>	
			
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>