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
	<div class="search__page sub-row">
		<div class="search__results--form">
			<?php get_search_form(); ?>
		</div>
		<h4><?php echo esc_html__( 'Search results here', 'lands' ); ?></h4>
		<div class="search__results">
			<ul>
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						?>
				<li>
					<article>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<div class="slice__card">
							<span class="material-icons">info</span>
							<h5><?php the_title(); ?></h5>
							</div>
						</a>
					</article>
				</li>
				<?php endwhile; else : ?>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>
