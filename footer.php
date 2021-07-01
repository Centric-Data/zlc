<?php

/**
 * Footer layout
 * Footer 
 * php version 7.3
 * 
 * @category Footer
 * @package  Centric
 * @author   Centric Data <projects@centricdata.net>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL 
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<!-- Footer Section -->
<footer>
    <div class="footer__wrapper">
    <section>
        <div class="footer__layout sub-row">
            <div class="footer__newsletter footer--item">
                <h2 class="email__sub--title">Sign up for the monthly ZLC Newsletter</h2>
                <div class="email__sub--desc">
                    <p>All the month's headlines and highlights from Zimbabwe Land Commission, direct to you monthly</p>
                    <div class="email__form">
                        <form action="#">
                            <div class="email__form--input">
                                <input type="email" id="email-addr" placeholder="Email address">
                                <button id="email-button">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer__menu footer--item">
                <nav role="navigation">
                    <?php wp_nav_menu(
                        [
                            'theme_location'  => 'footer-menu',
                            'container' => false,
                            'container_class' => 'footer__nav',
                            'menu_class' => 'footer__nav',
                            'items_wrap' => '<ul class="%2$s">%3$s</ul>' 
                        ]
                    );?>
                </nav>
            </div>
            <div class="footer__logo footer--item">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h4>' . get_bloginfo('name') .'</h4>';
            }
            ?>
            </div>
        </div>
    </section>
    </div>
    <section>
        <div class="copyright">
                <h5>&copy; 2021. All Rights Reserved. <a href="<?php echo esc_html__('https://www.centricdata.net/', 'lands')?>"><i>Developed by Centric Data</i></a></h5>
        </div>
    </section>
</footer>
<!-- End Footer Section -->

<?php wp_footer(); ?>
</body>
</html>