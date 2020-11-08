<section class="centered-arrow-link">
	<div class="grid-container">
		<div class="cell small-12 text-center">
			<?php 
			$link = get_sub_field('link');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <a class="button r-arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>	
		</div>
	</div>
</section>