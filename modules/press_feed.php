<section class="press-module module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="press-feed-wrap cell small-12">
				
				<?php 						
					echo do_shortcode('[ajax_load_more container_type="div" post_type="press_post" posts_per_page="5" scroll="false" transition_container_classes="press-feed grid-x grid-padding-x" button_label="Load More Posts" button_loading_label="Loading More Posts"]');
				?>	
			
			</div>
		</div>
	</div>
</section>