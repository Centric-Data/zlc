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

<section>
    <div class="posts__wrapper">
        <div class="banner__wrapper"></div>
        <div class="posts__layout sub-row">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>