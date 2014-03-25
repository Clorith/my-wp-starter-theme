<?php
/**
 * Our theme adds support for the WOrdPress menu manager and featured images
 */
add_theme_support('menus');
add_theme_support('post-thumbnails');

/**
 * We register a menu so we can reference it cleanly in our theme after it's been put to use by the theme user
 */
register_nav_menus(
	array(
		'main-menu' => __( 'Main menu' )
	)
);

function enqueue_theme_styles() {
	/**
	 * Register and enqueue styles
	 */
	wp_register_style( 'theme-style', get_bloginfo( 'stylesheet_url' ) );

	wp_enqueue_style( 'theme-style' );

	/**
	 * Register and enqueue javascript
	 */
	wp_register_script( 'theme-script', get_template_directory_uri() . '/resources/js/theme.js', array( 'jquery' ), '1.0.0' );

	wp_enqueue_script( 'theme-script' );
}

/**
 * We hide the WordPress admin bar (black top bar) if the user isn't logged in
 */
show_admin_bar( (is_user_logged_in() ? true : false) );

/**
 * Hook into the enqueue scripts section to add our own scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );