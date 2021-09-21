<?php
/**
 * Section for quicklinks on the bottom of the hero section
 * Downloads
 * php version 7.3
 *
 * @category Quicklinks_And_Downloads
 * @package  Centric
 * @author   Centric Data <projects@centricdata.net>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */

?>

<section class="yellowbg">
	<div class="quicklinks__wrapper container-lg">
		<div class="quicklinks__layout">
			<ul class="quicklinks__list">
				<li class="quicklinks__link">
					<a href="http://zlc.local/submit-form/">
						<div class="quicklinks__image">
							<span class="material-icons">description</span>
						</div>
						<h4>Change your title details</h4>
					</a>
				</li>
				<li class="quicklinks__link">
					<a href="http://zlc.local/?s">
						<div class="quicklinks__image">
							<span class="material-icons">location_searching</span>
						</div>
						<h4>Find information on a property</h4>
					</a>
				</li>
				<li class="quicklinks__link">
					<a href="http://zlc.local/submit-form/">
						<div class="quicklinks__image">
							<span class="material-icons">file_present</span>
						</div>
						<h4>Get a copy of your title</h4>
					</a>
				</li>
			</ul>
		</div>
		<?php echo do_shortcode( ' [doc-lense] ' ); ?>
	</div>
</section>
