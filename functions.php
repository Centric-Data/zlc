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
 * @return array
 */
function loadCSS()
{
    wp_register_style('landscss', get_template_directory_uri().'/css/lands.css', array(), false, 'all');
    wp_register_style('materialfonts', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), false, 'all');
    wp_enqueue_style('landscss');
    wp_enqueue_style('materialfonts');
}
add_action('wp_enqueue_scripts', 'loadCSS');

/**
 * Fetches the custom js file and embed it
 * 
 * @return array
 */
function loadJS()
{
    wp_register_script('landsjs', get_template_directory_uri().'/js/lands.js', array(), false, true);
    wp_enqueue_script('landsjs');
}
add_action('wp_enqueue_scripts', 'loadJS');

/**
 * Essential theme supports
 * 
 * @return array
 */
function lsThemeSetup()
{
    // automatic feed link
    add_theme_support('automatic-feed-links');
    // tag title
    add_theme_support('title-tag');
    // post formats
    $post_formats = [
        'aside',
        'image',
        'gallery',
        'video',
        'audio',
        'link',
        'quote',
        'status'
    ];
    add_theme_support('post-formats', $post_formats);
    // post thumbnail
    add_theme_support('post-thumbnails');
    // HTML5 support
    add_theme_support('html5', array('comment-list','comment-form','search-form','gallery','caption'));
    // refresh widget
    add_theme_support('customize-selective-refresh-widgets');
    // custom background
    $bg_defaults = [
        'default-image' => '',
        'default-preset'    => 'default',
        'default-size'      => 'cover',
        'default-repeat'    => 'no-repeat',
        'default-attachment'    => 'scroll',
    ];
    add_theme_support('custom-background', $bg_defaults);
    // custom header
    add_theme_support('custom-header');
    // custom logo
    add_theme_support(
        'custom-logo', [
        'height'    => 175,
        'width'     => 156,
        'flex-width' => true,
        'flex-height' => true,
        'header-text'   => array('site-title','site-description'),
        ]
    );
    // Adding custom image sizes to be used for post thumbnails & page images
    add_image_size('card-thumb', 375, 250, true);
}
add_action('after_setup_theme', 'lsThemeSetup');

/**
 * Register Menus
 * 
 * @return array
 */
function lsMenus()
{
    register_nav_menus(
        [
            'top-menu'  => __('Right Top Menu'),
            'primary-menu'  => __('Primary Menu')
        ]
    );
}
add_action('init', 'lsMenus');

?>