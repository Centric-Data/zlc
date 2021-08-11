<?php

/**
 * Search page, to display entries
 * Search
 * php version 7.3
 *
 * @category Search
 * @package  Centric
 * @author   Centric Data <projects@centricdata.net>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<section>
	<div class="search__page error__page sub-row">
		<div class="search__results error__page--message">
            <span class="material-icons">error</span>
			<h2>404: Page Not Found</h2>
		</div>
		<h4><?php echo esc_html__( 'You can search what you are looking for', 'lands' ); ?></h4>
		<div class="search__results--form">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>
