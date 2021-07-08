<?php
/**
 * Single Page layout
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

<section>
	<div class="contact__wrapper sub-row">
		<h4><?php the_title(); ?></h4>
		<div class="contact__layout">
			<div class="contact__layout--top"></div>
			<div class="contact__layout--bottom"></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
