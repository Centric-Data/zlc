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
$args = array(
	'post_type'      => 'post',
	'posts_per_page' => 5,
	'category_name'  => 'news',
	'post_status'    => 'publish',
	'order'          => 'DESC',
	'order_by'       => 'date',
);

$query = new WP_Query( $args );

?>
<h4>Popular Articles</h4>
<ul>
	<?php
	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();
			?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; else : ?>
			<?php echo esc_html_e( 'Sorry, no articles available', 'lands' ); ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
</ul>

