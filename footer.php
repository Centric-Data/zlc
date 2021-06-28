<!-- Footer Section -->
<footer class="footer__wrapper">
    <section>
        <div class="footer__layout sub-row">
            <div class="footer__newsletter">
                <h2 class="email__sub--title">Sign up for the monthly ZLC Newsletter</h2>
                <div class="email__sub--desc">
                    <p>All the month's headlines and highlights from Zimbabwe Land Commission, direct to you monthly</p>
                </div>
            </div>
            <div class="footer__menu">
                <ul class="footer__nav">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Complaints and Corrections</a></li>
                    <li><a href="#">Work for Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="footer__logo">
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
</footer>
<!-- End Footer Section -->

<?php wp_footer(); ?>
</body>
</html>