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
					<a href="http://zlc.local/complaints-and-corrections/">
						<div class="quicklinks__image">
							<span class="material-icons">description</span>
						</div>
						<h4>Lodge a Complaint/Dispute</h4>
					</a>
				</li>
				<li class="quicklinks__link">
					<a href="http://zlc.local/?s">
						<div class="quicklinks__image">
							<span class="material-icons">location_searching</span>
						</div>
						<h4>Track your Complaint/Dispute</h4>
					</a>
				</li>
				<li class="quicklinks__link">
					<a href="http://zlc.local/complaints-and-corrections/">
						<div class="quicklinks__image">
							<span class="material-icons">file_present</span>
						</div>
						<h4>How to lodge a Complaint</h4>
					</a>
				</li>
			</ul>
		</div>
		<?php echo do_shortcode( ' [doc-lense] ' ); ?>
	</div>
</section>
