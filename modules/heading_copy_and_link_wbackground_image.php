<?php
	$hcbg_imgID = get_sub_field('background_image');
	$hcbg_imgSize = "header-copy-bg-img";
	$hcbg_imgArr = wp_get_attachment_image_src( $hcbg_imgID, $hcbg_imgSize );
?>

<section class="heading-copy-bg module" style="background-image: url(<?php echo $hcbg_imgArr[0]; ?> ); <?php if(get_sub_field('remove_bottom_margin')):?>margin-bottom: 0;<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="cell small-12 tablet-8 tablet-offset-2 text-center">
				
				<?php if( $heading = get_sub_field('heading') ):?>
					<h2 class="text-center"><?php echo $heading; ?></h2>
				<?php endif;?>

				<?php if ($copy = get_sub_field('copy')):?>
					<div class="copy-wrap text-center"><?php echo $copy;?></div>
				<?php endif;?>
				
				<?php 
				$link = get_sub_field('link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				    <a class="button r-arrow caps" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
				    </a>
				<?php endif; ?>
				
			</div>
			
		</div>
	</div>
</section>