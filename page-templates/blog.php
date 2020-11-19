<?php 
/**
 * Template Name: Blog Page
 *
 * 
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
			    
			<?php
			$featured_posts = get_field('featured_post');
			if( $featured_posts ): ?>
				<header class="article-header banner">
			    <?php foreach( $featured_posts as $post ): 
			        setup_postdata($post); ?>
			        
			        <?php $theme = get_field('page_theme');?>
			        	        
			        <?php
			        	$banner_imgID = get_field('image_for_featured_post_banner');
			        	$banner_imgSize = "audience-banner-img";
			        	$banner_imgArr = wp_get_attachment_image_src( $banner_imgID, $banner_imgSize );
			        		        	
			        ?>
					<div class="left" style="background-image: url(<?php echo $banner_imgArr[0]; ?> );">
						
					</div>
				        
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
					
							<div class="right cell small-12 tablet-8 tablet-offset-4">
							
								<div class="post-theme-label caps weight-bold"><span class="bg-<?php echo $theme;?> weight-bold"><?php echo $theme;?></span></div>
									
									<h1 class="page-title"><?php the_title(); ?></h1>
								
								<a class="button r-arrow" href="<?php the_permalink() ?>" rel="bookmark">Read More</a>
								
							</div>
							
						</div>
					</div>
							
					<div class="nav-wrap blog-nav grid-container">
						<ul id="audience-blog-nav" class="blog-nav medium-horizontal menu grid-x grid-padding-x align-center small-up-1 medium-up-5 dropdown" data-smooth-scroll data-offset="100">
							<li class="bg-invest menu-item cell" role="menuitem">
								<a href="#invest">Invest</a>
							</li>
							<li class="bg-sell menu-item cell" role="menuitem">
								<a href="#sell">Sell</a>
							</li>
							<li class="bg-rent menu-item cell" role="menuitem">
								<a href="#rent">Rent</a>
							</li>
							<li class="bg-buy menu-item cell" role="menuitem">
								<a href="#buy">Buy</a>
							</li>
							<li class="bg-community menu-item cell" role="menuitem">
								<a href="#community">Community</a>
							</li>
						</ul>			
					</div>
			        
			    <?php endforeach; ?>
				</header>
			    <?php 
			    // Reset the global post object so that the rest of the page works correctly.
			    wp_reset_postdata(); ?>
			<?php endif; ?>	
			    
			    
			    <?php 
				$featured_post = get_field('featured_post', false, false);				
				?>
			    
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
				
						<section id="invest" class="cell small-12">
							<div class="top grid-x grid-padding-x align-justify">
								<div class="cell shrink">
									<div class="blog-cat-title">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-yellow.svg" alt="logo-round-yellow" />
										<h2>Invest</h2>
									</div>
								</div>
								
								<div class="cell shrink">
									<span class="circle-arrow-link">
										<a href="<?php the_field('invest_page_link');?>">
											View More Posts
										</a>
									</span>
								</div>
								
							</div>
							
							<div class="bottom grid-x grid-padding-x align-justify">
	
								<?php				
							    $args = array(  
							        'post_type' => 'post',
							        'post_status' => 'publish',
							        'posts_per_page' => 2, 
									'orderby'=> 'date', 
									'order' => 'DESC',
									'post__not_in' => $featured_post,
									'meta_query' => array(
								        array(
								            'key'   => 'page_theme',
								            'value' => 'invest',
								        )
								    )
							    );
							
							    $loop = new WP_Query( $args ); 
							        
							    while ( $loop->have_posts() ) : $loop->the_post();?>
							    
							        <?php get_template_part( 'parts/loop', 'archive' ); ?>
							    
							    <?php endwhile;
							    wp_reset_postdata();?>
							
							</div>
								
						</section>
		
		
						<section id="sell" class="cell small-12">
							<div class="top grid-x grid-padding-x align-justify">
								<div class="cell shrink">
									<div class="blog-cat-title">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-white.svg" alt="logo-round-white" />
										<h2>Sell</h2>
									</div>
								</div>
								
								<div class="cell shrink">
									<span class="circle-arrow-link">
										<a href="<?php the_field('invest_page_link');?>">
											View More Posts
										</a>
									</span>
								</div>
								
							</div>
							
							<div class="bottom grid-x grid-padding-x align-justify">
		
								<?php				
							    $args = array(  
							        'post_type' => 'post',
							        'post_status' => 'publish',
							        'posts_per_page' => 2, 
									'orderby'=> 'date', 
									'order' => 'DESC',
									'post__not_in' => $featured_post,
									'meta_query' => array(
								        array(
								            'key'   => 'page_theme',
								            'value' => 'sell',
								        )
								    )
							    );
							
							    $loop = new WP_Query( $args ); 
							        
							    while ( $loop->have_posts() ) : $loop->the_post();?>
							    
							        <?php get_template_part( 'parts/loop', 'archive' ); ?>
							    
							    <?php endwhile;
							    wp_reset_postdata();?>
								
							</div>
								
						</section>
						
						
						<section id="rent" class="cell small-12">
							<div class="top grid-x grid-padding-x align-justify">
								<div class="cell shrink">
									<div class="blog-cat-title">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-red.svg" alt="logo-round-red" />
										<h2>Rent</h2>
									</div>
								</div>
								
								<div class="cell shrink">
									<span class="circle-arrow-link">
										<a href="<?php the_field('invest_page_link');?>">
											View More Posts
										</a>
									</span>
								</div>
								
							</div>
							
							<div class="bottom grid-x grid-padding-x align-justify">
		
								<?php				
							    $args = array(  
							        'post_type' => 'post',
							        'post_status' => 'publish',
							        'posts_per_page' => 2, 
									'orderby'=> 'date', 
									'order' => 'DESC',
									'post__not_in' => $featured_post,
									'meta_query' => array(
								        array(
								            'key'   => 'page_theme',
								            'value' => 'rent',
								        )
								    )
							    );
							
							    $loop = new WP_Query( $args ); 
							        
							    while ( $loop->have_posts() ) : $loop->the_post();?>
							    
							        <?php get_template_part( 'parts/loop', 'archive' ); ?>
							    
							    <?php endwhile;
							    wp_reset_postdata();?>
							
							</div>
								
						</section>
						
						
						<section id="buy" class="cell small-12">
							<div class="top grid-x grid-padding-x align-justify">
								<div class="cell shrink">
									<div class="blog-cat-title">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-black.svg" alt="logo-round-black" />
										<h2>Buy</h2>
									</div>
								</div>
								
								<div class="cell shrink">
									<span class="circle-arrow-link">
										<a href="<?php the_field('invest_page_link');?>">
											View More Posts
										</a>
									</span>
								</div>
								
							</div>
							
							<div class="bottom grid-x grid-padding-x align-justify">
		
								<?php				
							    $args = array(  
							        'post_type' => 'post',
							        'post_status' => 'publish',
							        'posts_per_page' => 2, 
									'orderby'=> 'date', 
									'order' => 'DESC',
									'post__not_in' => $featured_post,
									'meta_query' => array(
								        array(
								            'key'   => 'page_theme',
								            'value' => 'buy',
								        )
								    )
							    );
							
							    $loop = new WP_Query( $args ); 
							        
							    while ( $loop->have_posts() ) : $loop->the_post();?>
							    
							        <?php get_template_part( 'parts/loop', 'archive' ); ?>
							    
							    <?php endwhile;
							    wp_reset_postdata();?>
							
							</div>
								
						</section>
						
						
						<section id="community" class="cell small-12">
							<div class="top grid-x grid-padding-x align-justify">
								<div class="cell shrink">
									<div class="blog-cat-title">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-gray.svg" alt="logo-round-gray" />
										<h2>Community</h2>
									</div>
								</div>
								
								<div class="cell shrink">
									<span class="circle-arrow-link">							
										<a href="<?php the_field('invest_page_link');?>">
											View More Posts
										</a>
									</span>
								</div>
								
							</div>
							
							<div class="bottom grid-x grid-padding-x align-justify">
		
								<?php				
							    $args = array(  
							        'post_type' => 'post',
							        'post_status' => 'publish',
							        'posts_per_page' => 2, 
									'orderby'=> 'date', 
									'order' => 'DESC',
									'post__not_in' => $featured_post,
									'meta_query' => array(
								        array(
								            'key'   => 'page_theme',
								            'value' => 'community',
								        )
								    )
							    );
							
							    $loop = new WP_Query( $args ); 
							        
							    while ( $loop->have_posts() ) : $loop->the_post();?>
							    
							        <?php get_template_part( 'parts/loop', 'archive' ); ?>
							    
							    <?php endwhile;
							    wp_reset_postdata();?>
							
							</div>
								
						</section>
								
					</div>
				</div>		
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>