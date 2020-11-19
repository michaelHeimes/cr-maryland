<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
 
$theme = get_field('page_theme');
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('in-archive cell small-12 medium-6'); ?> role="article">
	<div class="inner">

		<div class="img-wrap">
		
		<div class="theme-label caps weight-bold bg-<?php echo $theme;?>">
			<?php echo $theme;?>
		</div>
		
			<?php $image = get_field('image_for_archives');
			$image_size = 'blog-thumb';
			$image_url = $image['sizes'][$image_size];
			if($image): //dont output an empty image tag ?>
				<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['blog-thumb-width']; ?>" height="<?php echo $image['sizes']['blog-thumb-height']; ?>" alt="<?php echo $image['caption']; ?>" />
			<?php endif; ?>
		</div>
	
		<h3 class="weight-bold"><?php the_title(); ?></h3>
        <a class="lm-link caps weight-bold" href="<?php the_permalink() ?>" rel="bookmark">Read More</a>
    
	</div>			            
</article>

