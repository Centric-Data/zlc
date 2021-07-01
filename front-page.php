<?php

/**
 * Homepage structure
 * Homepage 
 * php version 7.3
 * 
 * @category Homepage
 * @package  Centric
 * @author   Centric Data <projects@centricdata.net>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL 
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */
?>

<?php get_header(); ?>

<!-- Main Layout -->
<div class="wrapper">
<!-- Carousel Section -->
    <?php
        get_template_part('includes/section', 'slider');
    ?>
<!-- End Carousel Section -->
<!-- Top Quicklinks Section -->
    <?php
        get_template_part('includes/section', 'quicklinks');
    ?>
<!-- End QuicklinksSection -->
<!-- Statistics Section -->
    <?php
        get_template_part('includes/section', 'stats');
    ?>
<!-- End Statistics Section -->
<!-- News Section -->
    <?php
        get_template_part('includes/section', 'news');
    ?>
<!-- End News Section -->
</div>
<!-- End Main Layout -->

<?php get_footer(); ?>