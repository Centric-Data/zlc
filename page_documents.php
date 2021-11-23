<?php
/**
 * Template Name: Documents Layout
 * Template Post Type: page, centric_documents
 *
 * @package documents
 */

?>
<?php get_header(); ?>

<?php

	$args = array(
		'post_type'      => 'centric_documents',
		'post_status'    => 'publish',
		'posts_per_page' => 10,
		'order'          => 'ASC',
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
			<div class="page__sidebar rounded-l-lg bg-yellow-300">
				<?php get_sidebar(); ?>
			</div>
			<div class="page__content rounded-r-lg">
				<h5>Download Docs</h5>
				<ul class="doc__lists">
				<?php
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
					<li>
						<div class="doc__item">
							<div class="doc__item--icon">
								<span class="material-icons">file_present</span>
							</div>
							<div class="doc__item--excerpt">
								<h5><?php the_title(); ?></h5>
							</div>
							<div class="doc__download--button">
								<button><span class="material-icons">downloading</span></button>
							</div>
						</div>
					</li>
						<?php
						endwhile; else :
							echo esc_html__( 'Sorry, no documents to download', 'lands' );
						endif;
						?>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
