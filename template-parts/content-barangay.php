<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEMPLATENAME
 */

?>

<section class="sf_single--barangay-banner sf_padding_section">
    <div class="cntr">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section class="sf_single--barangay-content sf_padding_section">
    <div class="cntr">
        <h3>About <?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>
</section>
