<?php 
/**
 * Template Name: Blog Page
 *
 * 
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main grid-container" role="main">
				
				<section class="cell small-12">
					<div class="top grid-x grid-padding-x align-justify">
						<div class="cell shrink">
							<h2>Invest</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-yellow.svg" alt="logo-round-yellow" />
						</div>
						
						<div class="cell-shrink">
							<a href="<?php the_field('invest_page_link');?>">
								<span>View More Posts</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/r-arrow-black.svg" alt="logo-round-yellow" />
							</a>
						</div>
						
					</div>
					
					<div class="bottom">
						<div class="grid-x grid-padding-x">

							<?php				
						    $args = array(  
						        'post_type' => 'post',
						        'post_status' => 'publish',
						        'posts_per_page' => 2, 
								'orderby'=> 'date', 
								'order' => 'DESC',
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
					</div>
						
				</section>


				<section class="cell small-12">
					<div class="top grid-x grid-padding-x align-justify">
						<div class="cell shrink">
							<h2>Sell</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-white.svg" alt="logo-round-white" />
						</div>
						
						<div class="cell-shrink">
							<a href="<?php the_field('invest_page_link');?>">
								<span>View More Posts</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/r-arrow-black.svg" alt="logo-round-yellow" />
							</a>
						</div>
						
					</div>
					
					<div class="bottom">
						<div class="grid-x grid-padding-x">

							<?php				
						    $args = array(  
						        'post_type' => 'post',
						        'post_status' => 'publish',
						        'posts_per_page' => 2, 
								'orderby'=> 'date', 
								'order' => 'DESC',
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
					</div>
						
				</section>
				
				
				<section class="cell small-12">
					<div class="top grid-x grid-padding-x align-justify">
						<div class="cell shrink">
							<h2>Rent</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-red.svg" alt="logo-round-red" />
						</div>
						
						<div class="cell-shrink">
							<a href="<?php the_field('invest_page_link');?>">
								<span>View More Posts</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/r-arrow-black.svg" alt="logo-round-yellow" />
							</a>
						</div>
						
					</div>
					
					<div class="bottom">
						<div class="grid-x grid-padding-x">

							<?php				
						    $args = array(  
						        'post_type' => 'post',
						        'post_status' => 'publish',
						        'posts_per_page' => 2, 
								'orderby'=> 'date', 
								'order' => 'DESC',
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
					</div>
						
				</section>
				
				
				<section class="cell small-12">
					<div class="top grid-x grid-padding-x align-justify">
						<div class="cell shrink">
							<h2>Buy</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-black.svg" alt="logo-round-black" />
						</div>
						
						<div class="cell-shrink">
							<a href="<?php the_field('invest_page_link');?>">
								<span>View More Posts</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/r-arrow-black.svg" alt="logo-round-yellow" />
							</a>
						</div>
						
					</div>
					
					<div class="bottom">
						<div class="grid-x grid-padding-x">

							<?php				
						    $args = array(  
						        'post_type' => 'post',
						        'post_status' => 'publish',
						        'posts_per_page' => 2, 
								'orderby'=> 'date', 
								'order' => 'DESC',
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
					</div>
						
				</section>
				
				
				<section class="cell small-12">
					<div class="top grid-x grid-padding-x align-justify">
						<div class="cell shrink">
							<h2>Community</h2>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-round-gray.svg" alt="logo-round-gray" />
						</div>
						
						<div class="cell-shrink">
							<a href="<?php the_field('invest_page_link');?>">
								<span>View More Posts</span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/r-arrow-black.svg" alt="logo-round-yellow" />
							</a>
						</div>
						
					</div>
					
					<div class="bottom">
						<div class="grid-x grid-padding-x">

							<?php				
						    $args = array(  
						        'post_type' => 'post',
						        'post_status' => 'publish',
						        'posts_per_page' => 2, 
								'orderby'=> 'date', 
								'order' => 'DESC',
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
					</div>
						
				</section>
										
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>