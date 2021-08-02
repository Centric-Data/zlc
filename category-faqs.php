<?php
/**
 * Category Page layout
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

	$args = array(
		'post_status'   => 'publish',
		'category_name' => 'faqs',
		'post_type'     => 'post',
		'order'         => 'ASC',
	);

	$query = new WP_Query( $args );
	?>

<section>
	<div class="page__wrapper">
		<div class="banner__wrapper">
			<div class="banner__wrapper--main sub-row">
				<nav role="navigation">
					<?php ls_breadcrumbs(); ?>
				</nav>
				<div class="banner__content">
					<div class="page__title">
						<h2>FAQs</h2>
					</div>
					<div class="page__social">
					<ul>
						<li>
							<a href="#">
								<img src="<?php echo bloginfo( 'template_url' ); ?>/img/facebook.png" alt="facebook">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo bloginfo( 'template_url' ); ?>/img/twitter.png" alt="facebook">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="<?php echo bloginfo( 'template_url' ); ?>/img/youtube.png" alt="facebook">
							</a>
						</li>
					</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="page__layout sub-row">
			<div class="page__sidebar">
				<?php get_sidebar( 'popular' ); ?>
			</div>
			<div class="page__content">
				<ul class="faqs__wrapper">
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?><span class="material-icons">add_circle</span></a></li>
						<?php endwhile; ?>
						<?php else : echo esc_html_e( 'Sorry, no questions availables', 'lands' ); ?>
					<?php endif; ?>

				</ul>
			</div>
		</div>
	</div>
</section>

<?php
	get_footer();
