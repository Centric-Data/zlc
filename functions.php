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

define( 'PLUGINS_DIR_URL', plugin_dir_url( __FILE__ ) );

/**
 * Fetches the custom stylesheet and embed it
 *
 * @return void
 */


function ls_loadcss() {
	wp_register_style( 'landscss', get_template_directory_uri() . '/css/lands.css', array(), '1.0', 'all' );
	wp_register_style( 'materialfonts', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0', 'all' );
	wp_register_style( 'bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.0.2', 'all' );
	wp_enqueue_style( 'landscss' );
	wp_enqueue_style( 'materialfonts' );
	wp_enqueue_style( 'bootstrapcss' );
}
add_action( 'wp_enqueue_scripts', 'ls_loadcss' );

/**
 * Fetches the custom js file and embed it
 *
 * @return void
 */
function ls_loadjs() {
	wp_register_script( 'landsjs', get_template_directory_uri() . '/js/lands.js', array(), '1.0', true );
	wp_register_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.0.2', true );
	wp_enqueue_script( 'landsjs' );
	wp_enqueue_script( 'bootstrapjs' );
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
 * Excerpt output
 *
 * @return void
 */
function ls_custom_excerpt_length( $length ){
	return 20;
}
add_filter( 'excerpt_length', 'ls_custom_excerpt_length', 999 );

/**
 * Excerpt output
 *
 * @return void
 */
function ls_excerpt_more( $more ){
	if( is_category() ) {
		$more = sprintf( '<a class="read__more" href="%1$s">%2$s</a>', get_permalink( get_the_ID() ), __( 'Read More', 'lands' ) );
	} else{
		if( is_page() ){
			$more = sprintf( '<a href="%1$s">%2$s</a>', get_permalink( get_the_ID() ), __( '...', 'lands' ) );
		}
	}

	return $more;
}
add_filter( 'excerpt_more', 'ls_excerpt_more' );

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
 * Add Walker Class to the menu.
 */
class LS_Menu_Walker extends Walker_Nav_Menu {
	private $current_item;
	private $dropdown_menu_alignment_values = array(
		'dropdown-menu-start',
		'dropdown-menu-end',
		'dropdown-menu-sm-start',
		'dropdown-menu-sm-end',
		'dropdown-menu-md-start',
		'dropdown-menu-md-end',
		'dropdown-menu-lg-start',
		'dropdown-menu-lg-end',
		'dropdown-menu-xl-start',
		'dropdown-menu-xl-end',
		'dropdown-menu-xxl-start',
		'dropdown-menu-xxl-end',
	);

	function start_lvl( &$output, $depth = 0, $args = null ) {
		$dropdown_menu_class[] = '';
		foreach ( $this->current_item->classes as $class ) {
			if ( in_array( $class, $this->dropdown_menu_alignment_values ) ) {
				$dropdown_menu_class[] = $class;
			}
		}
		$indent  = str_repeat( "\t", $depth );
		$submenu = ( $depth > 0 ) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr( implode( ' ', $dropdown_menu_class ) ) . " depth_$depth\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$this->current_item = $item;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$li_attributes = '';
		$class_names   = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$classes[] = ( $args->walker->has_children ) ? 'dropdown' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;
		if ( $depth && $args->walker->has_children ) {
			$classes[] = 'dropdown-menu dropdown-menu-end';
		}

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

		$active_class   = ( $item->current || $item->current_item_ancestor ) ? 'active' : '';
		$nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
		$attributes    .= ( $args->walker->has_children ) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

		$item_output  = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/**
 * Detect plugin. For use on Front End and Back End.
 */
if ( in_array( PLUGINS_DIR_URL . '/doclense/doclense.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ), true ) ) {
	flush_rewrite_rules();
}
