<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12 medium-6'); ?> role="article">
	<div class="inner">

		<div class="img-wrap">
			<?php $image = get_field('image_for_archives');
			$image_size = 'blog-thumb';
			$image_url = $image['sizes'][$image_size];
			if($image): //dont output an empty image tag ?>
				<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['blog-thumb-width']; ?>" height="<?php echo $image['sizes']['blog-thumb-height']; ?>" alt="<?php echo $image['caption']; ?>" />
			<?php endif; ?>
		</div>
	
		<h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink() ?>" rel="bookmark">Read More</a>
    
	</div>			            
</article>

