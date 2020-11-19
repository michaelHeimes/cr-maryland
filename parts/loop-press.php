<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
  
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell small-12'); ?> role="article">
	<div class="inner grid-x grid-padding-x">

		<div class="left cell small-12 medium-3">

			<a href="<?php the_field('article_link');?>" target="_blank">
				<span><?php the_field('press_publication_name');?></span>
			</a>
			
			<div class="date">
				<?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?>
			</div>
		
		</div>
		
		<div class="right cell small-12 medium-9 tablet-8 tablet-offset-1">
			
			<h2><a href="<?php the_field('article_pdf');?>" target="_blank"><?php the_field('article_title');?></a></h2>
			
		</div>
    
	</div>			            
</article>

