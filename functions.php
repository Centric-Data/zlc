<?php
/**
 * Enqueue css, js, img assets
 * Functions
 * php version 7.3
 *
 * @category Functions
 * @package  Centric
 * @author   Centric Data <projects@centricdata.net>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Fetches the custom stylesheet and embed it
 *
 * @return void
 */
function ls_loadcss() {
	wp_register_style( 'landscss', get_template_directory_uri() . '/css/lands.css', array(), '1.0', 'all' );
	wp_register_style( 'materialfonts', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all' );
	wp_enqueue_style( 'landscss' );
	wp_enqueue_style( 'materialfonts' );
}
add_action( 'wp_enqueue_scripts', 'ls_loadcss' );

/**
 * Fetches the custom js file and embed it
 *
 * @return void
 */
function ls_loadjs() {
	wp_register_script( 'landsjs', get_template_directory_uri() . '/js/lands.js', array(), '1.0', true );
	wp_enqueue_script( 'landsjs' );
}
add_action( 'wp_enqueue_scripts', 'ls_loadjs' );

/**
 * Essential theme supports
 *
 * @return void
 */
function ls_themesetup() {
	// automatic feed link.
	add_theme_support( 'automatic-feed-links' );
	// tag title.
	add_theme_support( 'title-tag' );
	// post formats.
	$post_formats = array(
		'aside',
		'image',
		'gallery',
		'video',
		'audio',
		'link',
		'quote',
		'status',
	);
	add_theme_support( 'post-formats', $post_formats );
	// post thumbnail.
	add_theme_support( 'post-thumbnails' );
	// HTML5 support.
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
	// refresh widget.
	add_theme_support( 'customize-selective-refresh-widgets' );
	// custom background.
	$bg_defaults = array(
		'default-image'      => '',
		'default-preset'     => 'default',
		'default-size'       => 'cover',
		'default-repeat'     => 'no-repeat',
		'default-attachment' => 'scroll',
	);
	add_theme_support( 'custom-background', $bg_defaults );
	// custom header.
	add_theme_support( 'custom-header' );
	// custom logo.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 175,
			'width'       => 156,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array( 'site-title', 'site-description' ),
		)
	);
	// Adding custom image sizes to be used for post thumbnails & page images.
	add_image_size( 'card-thumb', 375, 250, true );
}
add_action( 'after_setup_theme', 'ls_themesetup' );

/**
 * Register Menus
 *
 * @return void
 */
function ls_menus() {
	register_nav_menus(
		array(
			'top-menu'     => esc_html__( 'Right Top Menu', 'lands' ),
			'primary-menu' => esc_html__( 'Primary Menu', 'lands' ),
			'footer-menu'  => esc_html__( 'Footer Menu', 'lands' ),
		)
	);
}
add_action( 'init', 'ls_menus' );

/**
 * Add some breadcrumbs to banner navigation.
 *
 * @return void
 */
function ls_breadcrumbs() {
	echo '<ul class="page__breadcrumbs">';
	echo '<li>';
	echo '<a href="' . esc_url( home_url() ) . '" rel="nofollow">Home</a>';
	if ( is_category() || is_single() ) {
		echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;';
		the_category( ' &bull; ' );
		if ( is_single() ) {
			echo ' &nbsp;&nbsp;&#187;&nbsp;&nbsp; ';
			the_title();
		}
	} elseif ( is_page() ) {
		echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;';
		echo esc_attr( the_title() );
	} elseif ( is_search() ) {
		echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ';
		echo '"<em>';
		echo esc_attr( the_search_query() );
		echo '</em>"';
	}
	echo '</li>';
	echo '</ul>';
}

/**
 * Add some breadcrumbs to banner navigation.
 *
 * @return void
 */
function ls_custom_admin_footer() {

	add_filter( 'admin_footer_text', 'ls_edit_text', 11 );

}

/**
 * Add some breadcrumbs to banner navigation.
 *
 * @return text
 */
function ls_edit_text( $footer ) {
	$new_footer = str_replace( '.</span>', __( ' and <a href="https://centricdata.net">Centric Data</a>.</span>', 'contactlense' ), $footer );
	return $new_footer;
}
add_action( 'admin_init', 'ls_custom_admin_footer', 10, 1 );

/**
 * Register Documents Post-Type
 *
 * @return void
 */
function ls_download_form_post_type() {
	$labels = array(
		'name'           => _x( 'Documents', 'Post type general name', 'lands' ),
		'singular'       => _x( 'Document', 'Post type singular name', 'lands' ),
		'menu_name'      => _x( 'Documents', 'Admin Menu Text', 'lands' ),
		'name_admin_bar' => _x( 'Document', 'Add New on Toolbar', 'lands' ),
		'add_new'        => __( 'Add New', 'lands' ),
		'add_new_item'   => __( 'Add New Document', 'lands' ),
		'new_item'       => __( 'New Document' ),
		'edit_item'      => __( 'Edit Document', 'lands' ),
		'view_item'      => __( 'View Document', 'lands' ),
		'all_items'      => __( 'All Documents', 'lands' ),
	);
	$args   = array(
		'labels'          => $labels,
		'public'          => true,
		'has_archive'     => true,
		'hierarchical'    => false,
		'supports'        => array( 'title', 'editor' ),
		'capability_type' => 'post',
		'menu_icon'       => 'dashicons-text-page',
	);
	register_post_type( 'centric_documents', $args );
}
add_action( 'init', 'ls_download_form_post_type' );
