<?php
/**
 * Contact Page layout
 * Page
 * php version 7.3
 *
 * @category Page
 * @package  Centric
 * @author   Centric Data <projects@centricdata.net>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */

?>

<?php get_header(); ?>

<?php
	echo do_shortcode( ' [contact-lense] ' );
?>

<?php
	// Calling the other branches from the post-type.
	echo do_shortcode( ' [office-lense]' );
?>

<?php
get_footer();
