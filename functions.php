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
    wp_enqueue_style('landscss');
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
?>