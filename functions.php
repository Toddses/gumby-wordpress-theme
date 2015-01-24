<?php

/**
 * Include Advanced Custom Fields.
 *
 * Must install your own ACF Pro version into inc/ in order for this to work.
 */
/*add_filter('acf/settings/path', 'acfSettingsPath');
function acfSettingsPath( $path ) {
    $path = get_template_directory() . '/inc/advanced-custom-fields-pro/';
    return $path;
}

add_filter('acf/settings/dir', 'acfSettingsDir');
function acfSettingsDir( $dir ) {
    $dir = get_template_directory_uri() . '/inc/advanced-custom-fields-pro/';
    return $dir;
}

include_once(get_template_directory() . '/inc/advanced-custom-fields-pro/acf.php' );
*/

/**
 * Enqueue scripts and styles
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts', 99 );
function theme_enqueue_scripts() {
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/style.min.css' );
    wp_enqueue_style( 'vendor-style', get_template_directory_uri() . '/vendor.min.css' );

    wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/assets/js/dist/modernizr-2.6.2.min.js', array(), '2.6.2', false );
    wp_enqueue_script( 'gumby-script', get_template_directory_uri() . '/assets/js/dist/gumby.min.js', array(), '2.6.3', true );
    wp_enqueue_script( 'vendor-script', get_template_directory_uri() . '/assets/js/dist/vendor.min.js', array(), '', true );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/dist/all.min.js', array(), '', true );
}

/**
 * Action to add a separators to the admin menu
 */
add_action('admin_menu','add_admin_menu_separators', 99);
function add_admin_menu_separators()
{
	//create_admin_menu_separator( 30 );
}

/**
 * Function to add a separator to the admin menu
 *
 * @param $position (int) menu position for the separator
 */
function create_admin_menu_separator( $position )
{
	global $menu;

	$menu[$position] = array(
			0 => '',
			1 => 'read',
			2 => 'separator' . $position,
			3 => '',
			4 => 'wp-menu-separator'
		);
}
