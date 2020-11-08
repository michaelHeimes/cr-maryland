<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'centered_button_link' ) : 
	
		get_template_part('modules/centered_button_link');
	
	endif;?>

	<?php if ( get_row_layout() == 'contact_form' ) : 
	
		get_template_part('modules/contact_form');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'faqs' ) : 
	
		get_template_part('modules/faqs');
	
	endif;?>

	<?php if ( get_row_layout() == 'four_columns_of_numbers_and_labels' ) : 
	
		get_template_part('modules/four_columns_of_numbers_and_labels');
	
	endif;?>

	<?php if ( get_row_layout() == 'full_width_image' ) : 
	
		get_template_part('modules/full_width_image');
	
	endif;?>

	<?php if ( get_row_layout() == 'heading_copy_and_link_wbackground_image' ) : 
	
		get_template_part('modules/heading_copy_and_link_wbackground_image');
	
	endif;?>

	<?php if ( get_row_layout() == 'heading_tri-color_bar_copy' ) : 
	
		get_template_part('modules/heading_tri-color_bar_copy');
	
	endif;?>

	<?php if ( get_row_layout() == 'icon_and_text_rows' ) : 
	
		get_template_part('modules/icon_and_text_rows');
	
	endif;?>

	<?php if ( get_row_layout() == 'image_gallery_slider' ) : 
	
		get_template_part('modules/image_gallery_slider');
	
	endif;?>


	<?php if ( get_row_layout() == 'resource_links' ) : 
	
		get_template_part('modules/resource_links');
	
	endif;?>

	<?php if ( get_row_layout() == 'slider_and_copy' ) : 
	
		get_template_part('modules/slider_and_copy');
	
	endif;?>

	<?php if ( get_row_layout() == 'step_cubes' ) : 
	
		get_template_part('modules/step_cubes');
	
	endif;?>

	<?php if ( get_row_layout() == 'testimonials' ) : 
	
		get_template_part('modules/testimonials');
	
	endif;?>

	<?php if ( get_row_layout() == 'two_blog_posts' ) : 
	
		get_template_part('modules/two_blog_posts');
	
	endif;?>

	<?php if ( get_row_layout() == 'video_element' ) : 
	
		get_template_part('modules/video_element');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('modules/wysiwyg_editor');
	
	endif;?>
	
	<?php endwhile;?>
<?php endif;?>



