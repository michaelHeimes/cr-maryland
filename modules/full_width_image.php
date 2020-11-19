<section class="full-width-img module text-center" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	
	<?php $image = get_sub_field('image'); 
	$image_size = 'full-width-img';
	$image_url = $image['sizes'][$image_size];
	if($image): //dont output an empty image tag ?>
		<img src="<?php echo $image_url; ?>" width="<?php echo $image['sizes']['full-width-img-width']; ?>" height="<?php echo $image['sizes']['full-width-img-height']; ?>" alt="<?php echo $image['caption']; ?>" />
	<?php endif; ?>
	
</section>