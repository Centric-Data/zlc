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
	<div class="page__wrapper">
		<div class="banner__wrapper">
			<div class="banner__wrapper--main sub-row">
				<nav role="navigation">
					<?php ls_breadcrumbs(); ?>
				</nav>
				<div class="banner__content">
					<div class="page__title">
						<h2><?php the_title(); ?></h2>
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
			<div class="page__right--content">
			<div class="page__content">
				<?php the_content(); ?>
			</div>
			<div class="comments__section">
				<?php if( comments_open() ) : ?>
					<?php comments_template( '/short-comments.php' ); ?>
				<?php endif; ?>
			</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
