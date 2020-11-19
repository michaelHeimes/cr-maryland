<section class="wysiwyg-editor module" <?php if(get_sub_field('remove_bottom_margin')):?>style="margin-bottom: 0;"<?php endif;?>>
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<?php the_sub_field('wysiwyg_editor');?>
			</div>
		</div>
	</div>
</section>