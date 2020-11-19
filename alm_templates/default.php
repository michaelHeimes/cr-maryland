<?php if( get_post_type(get_the_ID()) == 'post'):?>
	<?php get_template_part( 'parts/loop', 'archive' ); ?>
<?php endif;?>

<?php if( get_post_type(get_the_ID()) == 'press_post'):?>
	<?php get_template_part( 'parts/loop', 'press' ); ?>
<?php endif;?>