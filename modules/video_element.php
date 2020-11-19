<section class="video-element module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">

				<?php if ($copy = get_sub_field('copy')):?>
					<div class="copy-wrap"><?php echo $copy;?></div>
				<?php endif;?>
				
				<div class="responsive-embed widescreen">
					<?php
					
					// Load value.
					$iframe = get_sub_field('video_link');
					
					// Use preg_match to find iframe src.
					preg_match('/src="(.+?)"/', $iframe, $matches);
					$src = $matches[1];
					
					// Add extra parameters to src and replcae HTML.
					$params = array(
					    'controls'  => 0,
					    'hd'        => 1,
					    'autohide'  => 1
					);
					$new_src = add_query_arg($params, $src);
					$iframe = str_replace($src, $new_src, $iframe);
					
					// Add extra attributes to iframe HTML.
					$attributes = 'frameborder="0"';
					$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
					
					// Display customized HTML.
					echo $iframe;
					?>					
				</div>
				
			</div>
		</div>
	</div>
</section>