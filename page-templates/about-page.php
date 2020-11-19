<?php 
/**
 * Template Name: About Page
 *
 * 
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
			    
				<header class="article-header banner">
					
					<?php
						$banner_imgID = get_field('banner_image');
						$banner_imgSize = "audience-banner-img";
						$banner_imgArr = wp_get_attachment_image_src( $banner_imgID, $banner_imgSize );
					
					?>
					<div class="left" style="background-image: url(<?php echo $banner_imgArr[0]; ?> );">
						
					</div>
					
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
					
							<div class="right cell small-12 tablet-8 tablet-offset-4">
							
								<div class="theme-name caps weight-bold">About</div>
								<?php if ( $alt_title = get_field('banner_alternative_title') ):?>
									<h1 class="page-title weight-black"><?php echo $alt_title; ?></h1>
								<?php else:?>
									<h1 class="page-title weight-black"><?php the_title(); ?></h1>
								<?php endif;?>
								
								<?php if ($banner_text = get_field('banner_text')):?>
									<div class="copy-wrap"><?php echo $banner_text;?></div>
								<?php endif;?>
								
								<?php 
								$link = get_field('banner_link');
								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    ?>
								    <a class="button r-arrow caps bg-rent" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
								<?php endif; ?>
								
							</div>
							
						</div>
					</div>
									
					<div class="nav-wrap about-nav grid-container">
						<ul id="audience-blog-nav" class="medium-horizontal menu grid-x grid-padding-x align-center dropdown" data-smooth-scroll data-offset="100">
							<li class="bg-buy menu-item cell shrink" role="menuitem">
								<a href="#our-history">Our History</a>
							</li>
							<li class="bg-buy menu-item cell shrink" role="menuitem">
								<a href="#our-vision">Our Vision</a>
							</li>
<!--
							<li class="bg-buy menu-item cell" role="menuitem">
								<a href="#our-values">Our Values</a>
							</li>
-->
							<li class="bg-buy menu-item cell shrink" role="menuitem">
								<a href="#innovative-renovators">Innovative Renovators</a>
							</li>
							<li class="bg-buy menu-item cell shrink" role="menuitem">
								<a href="#our-team">Our Team</a>
							</li>
						</ul>			
					</div>			
					
				</header> <!-- end article header -->
			    
				
				<section id="our-history" class="module">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12">
								<?php the_field('our_history');?>
							</div>
						</div>					
					</div>
				</section>

				<section id="our-vision" class="heading-tri-color-copy module">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-6 tablet-offset-3">
								<div class="inner">
									
									<?php if( $heading = get_field('ov_heading') ):?>
										<h2 class="text-center tri-bar-heading small-caps"><?php echo $heading; ?></h2>
									<?php endif;?>
									
									<div class="tri-color-bar">
										<span></span>
										<span></span>
										<span></span>						
									</div>
					
									<?php if ($copy = get_field('ov_copy')):?>
										<div class="copy-wrap text-center"><?php echo $copy;?></div>
									<?php endif;?>
								
								</div>
							</div>
						</div>
					</div>
				</section>
								
				
				<section id="our-values" class="module">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12">
								<?php the_field('our_values');?>
							</div>
						</div>					
					</div>
				</section>
				
				<section id="innovative-renovators" class="module">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12">
								<?php the_field('innovative_renovators');?>
							</div>
						</div>
						
						<div class="grid-x grid-padding-x">
							<?php 
							$images = get_field('ir_image_slider');
							if( $images ): ?>
							    <div class="ir-image-slider cell small-12">
							        <?php foreach( $images as $image ): ?>
							            <img src="<?php echo esc_url($image['sizes']['about-slider']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							        <?php endforeach; ?>
							    </div>
							<?php endif; ?>																								
						</div>					
					</div>
				</section>
				
				<section id="our-team" class="module">
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12">
								<?php the_field('team_copy');?>
								
								<?php
								$args = array(
									'post_type' => 'team_member',
									'posts_per_page' => 99999,
									);
								$posts = get_posts($args);
								
								?>
					
								<?php if ($posts): $count = 0;?>
								
									<div class="team-accordion" data-accordion>
					
										<?php foreach ($posts as $post):?>
										
											<div class="single-team-member accordion-item<?php if($count == 0):?> is-active<?php endif;?>" data-accordion-item>
												
												
												<a href="#" class="accordion-title">

													<div class="grid-x grid-padding-x">
														
														<div class="left cell small-12 medium-2">

															<?php $image = get_field('photo'); 
															$image_size = 'team-photo';
															$image_url = $image['sizes'][$image_size];
															if($image): //dont output an empty image tag ?>
																<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['team-photo-width']; ?>" height="<?php echo $image['sizes']['team-photo-height']; ?>" alt="<?php echo $image['caption']; ?>" />
															<?php endif; ?>

														</div>
														
														<div class="right cell auto">
															<h3 class="caps weight-black"><?php the_title();?></h3>
															<h4><?php the_field('title');?></h4>
															<div>Direct: <?php the_field('direct_phone_number');?></div>
															<div>Office: <?php the_field('office_phone_number');?></div>
														</div>
													
													</div>
													
												</a>
												
												<div class="accordion-content" data-tab-content>
													<div class="grid-x grid-padding-x">
														<div class="cell small-12 medium-10 medium-offset-2">
															<?php the_field('bio');?>	
														</div>		
													</div>			
												</div>
												
											</div>
											
										<?php $count++; ?>
						
										<?php endforeach; ?>
									
									</div>
					
									<?php wp_reset_postdata(); ?>
						
								<?php endif; ?>	

							</div>
						</div>					
					</div>
				</section>			        
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>