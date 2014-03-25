<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
	array(
		'main-menu' => __( 'Main menu' )
	)
);

function enqueue_theme_styles() {
	wp_register_style( 'theme-style', get_bloginfo( 'stylesheet_url' ) );

	wp_enqueue_style( 'theme-style' );
}

show_admin_bar( (is_user_logged_in() ? true : false) );

add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );