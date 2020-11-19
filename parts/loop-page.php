<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
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
		
				<div class="right cell small-12 medium-8 medium-offset-4">
				
					<div class="theme-name caps weight-bold"><?php the_field('page_theme');?></div>
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
					    <a class="button r-arrow caps" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
					
				</div>
				
			</div>
		</div>
						
		<div class="nav-wrap grid-container">
			<?php $theme = get_field('page_theme');
				
				if ($theme == 'invest') {
					joints_invest_nav();
				}
				elseif ($theme == 'sell') {
					joints_sell_nav();
				}

				elseif ($theme == 'rent') {
					joints_rent_nav();
				}
				
				elseif ($theme == 'buy') {
					joints_buy_nav();
				}

				elseif ($theme == 'community') {
					joints_community_nav();
				}
				
			?>		
		</div>				
		
	</header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	    
	    <?php get_template_part( 'parts/loop', 'modules' ); ?>
	    
	</section> <!-- end article section -->
						
<!--
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer>
-->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->