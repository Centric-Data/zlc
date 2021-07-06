<?php
/**
 * News section showing blogs
 * Slider
 * php version 7.3
 *
 * @category News
 * @package  Centric
 * @author   Centric Data <projects@centricdata.net>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */

?>
<?php

$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'post_status'    => 'publish',
	'category_name'  => 'news',
	'order'          => 'DESC',
	'orderby'        => 'date',
);

$query = new WP_Query( $args );
?>
<section class="yellowbg">
	<div class="news__wrapper sub-row">
		<h5>Latest Articles</h5>
		<div class="news__items">
		<?php
		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) :
				$query->the_post();
				?>
			<div class="news__card">
				<article>
					<div class="news__card--img">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail( 'card-thumb' ); ?>
						</a>
					</div>
					<div class="news__card--content">
						<div>
							<h4>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_title(); ?>
								</a>
							</h4>
						</div>
						<div><p><?php the_excerpt(); ?></p></div>
						<div class="readmore__front">
							<time><?php the_time( 'd F Y' ); ?></time>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<span class="material-icons">arrow_forward</span>
							</a>
						</div>
					</div>
				</article>
			</div>
					<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no content available', 'lands' ); ?></p>
		<?php endif; ?>
		</div>
	</div>
</section>
