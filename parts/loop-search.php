<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<?php $theme = get_field('page_theme');?>

<article id="post-<?php the_ID(); ?>" <?php post_class($theme); ?> role="article">					
	
	<header class="search-article-header">
		<h2>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<span><?php the_title(); ?></span>
			</a>
		</h2>
<!-- 		<?php get_template_part( 'parts/content', 'byline' ); ?> -->
			<div class="date">
				<?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?>
			</div>

		<?php the_excerpt();?>
	</header> <!-- end article header -->
					
	<section class="entry-content" itemprop="text">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointswp') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->	
				    						
</article> <!-- end article -->
