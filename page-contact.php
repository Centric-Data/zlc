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
	<div class="contact__wrapper sub-row">
		<h4><?php echo esc_html__( 'Contact Us', 'lands' ); ?></h4>
		<p><?php echo esc_html__( 'We’re here to help and answer any question you might have. We look forward to hearing from you', 'lands' ); ?></p>
		<div class="contact__layout">
			<div class="contact__layout--top">
				<div class="top__left">
					<h5><?php echo esc_html__( 'Contact Information', 'lands' ); ?></h5>
					<div class="top__left--card">
						<div class="card--info">
							<div class="card--icon">
								<span class="material-icons">room</span>
							</div>
							<div class="card--details">
								<p>
								The Zimbabwe Land Commission <br>
								19280 Borrowdale Road <br>
								Block 1, Celestial Park, Harare <br>
								Private Bag CY7771, Harare, Zimbabwe
								</p>
							</div>
						</div>
						<div class="card--info">
							<div class="card--icon">
								<span class="material-icons">phone</span>
							</div>
								<div class="card--details">
									<p>+263-242- 774604</p>
								</div>
						</div>
						<div class="card--info">
							<div class="card--icon">
								<span class="material-icons">mail</span>
							</div>
							<div class="card--details">
								<p>info@zlc.co.zw</p>
							</div>
						</div>
					</div>
				</div>
				<div class="top__right">
					<h3><?php echo esc_html__( 'Get In Touch.', 'lands' ); ?></h3>
					<div class="form__wrapper">
						<form>
							<input id="cf_fullname" type="text" name="fullname" placeholder="Fullname">
							<input id="cf_email" type="email" name="email" placeholder="Email">
							<textarea id="cf_message" rows="5" cols="33" name="fullname" placeholder="Message">Message</textarea>
							<button id="cf_submit">Send Message</button>
						</form>
					</div>
				</div>
			</div>
			<div class="contact__layout--bottom"></div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
