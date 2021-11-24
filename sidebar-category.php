<?php
/**
 * Popular Sidebar
 * Articles
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

$post = get_post();
if ( $post ) {
    $categories = get_the_category( $post->ID );
    $catslug = $categories[0]->slug;
    $catname = $categories[0]->name;
}


$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 5,
	'category_name'  => $catslug,
	'post_status'    => 'publish',
	'order'          => 'DESC',
	'order_by'       => 'date',
);

$query = new WP_Query( $args );

?>
<div class="side__container h-full flex flex-col justify-between">
	<div class="side__top">
	<ul>
		<?php
		if ( $query->have_posts() ) :
			while ( $query->have_posts() ) :
				$query->the_post();
				?>
			<li class="list-none rounded text-center no-underline bg-yellow-200 hover:bg-yellow-300"><a class="no-underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; else : ?>
				<?php echo esc_html_e( 'Sorry, no articles available', 'lands' ); ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
	</ul>
	</div>
	<div class="side__bottom flex justify-center">
		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		} else {
			echo '<h4>' . bloginfo( 'name' ) . '</h4>';
		}
		?>
	</div>
</div>

