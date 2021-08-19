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

<?php
	$cat_name_label = get_the_category();
	$post_cat       = $cat_name_label[0]->slug;

	$args = array(
		'category_name'  => $post_cat,
		'posts_per_page' => 10,
		'post_status'    => 'publish',
	);

	$query = new WP_Query( $args );
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
						<h2><?php the_category( ', ' ); ?></h2>
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
				<ul class="cat__post--list">
					<?php
					if ( $query->have_posts() ) :
						while ( $query->have_posts() ) :
							$query->the_post();
							?>
					<li>
						<article>
							<div class="article__img">
								<?php
								if ( $post_cat === 'press' ) {
									?>
										<span class="material-icons">notifications</span> 
										<?php
								} elseif ( $post_cat !== 'press' ) {
									the_post_thumbnail();
								} else {
									echo 'No thumbnail on this content';
								}

								?>
							</div>
							<div class="article__excerpt">
								<?php the_excerpt(); ?>
							</div>
						</article>
					</li>
							<?php
					endwhile; else :
							echo esc_html_e( 'Sorry no posts for this category', 'lands' );
					endif;
					?>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
