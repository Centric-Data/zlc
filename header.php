<?php
/**
 * This is a custom theme designed for Zimbabwe Land Commission
 * Header
 * php version 7.3
 *
 * @category Header
 * @package  Centric
 * @author   Centric Data <projects@centricdata.net>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> | <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>
	</title>
	<?php wp_head(); ?>
</head>
<body  <?php body_class(); ?> >
<!-- Header Section -->
	<header class="header" role="banner">
	<div class="top__nav">
		<div class="top__nav--container row">
			<div class="top__items">
				<div class="search__wrapper">
					<?php get_search_form(); ?>
				</div>
				<div class="nav__wrapper">
					<nav role="navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'top-menu',
								'container'       => false,
								'container_class' => 'top__nav--menu',
								'menu_class'      => 'top__nav--menu',
								'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
							)
						);
						?>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="main__menu">
		<div class="main__menu--container row">
			<div class="main__logo">
				<?php
				if ( has_custom_logo() ) {
					the_custom_logo();
				} else {
					echo '<h4>' . bloginfo( 'name' ) . '</h4>';
				}
				?>
			</div>
			<nav role="navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary-menu',
						'container'      => false,
					)
				);
				?>
			</nav>
			<div class="mobile__menu">
				<button class="mobile__menu--nav"><span class="material-icons">menu</span></button>
			</div>
			<div class="social__links">
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
	</header>
<!-- End Header Section -->
