<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEMPLATENAME
 */

?>

<section class="sf_officeBanner sf_padding_section">
    <div class="cntr">
        <div class="sf_officeBannerWrap">
            <div class="sf_officeBannerTitle">
                <h1>
                    Barangay <?php the_title(); ?>
                </h1>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae modi cumque magnam nemo nobis dolore, perferendis quam doloribus iusto sit accusamus animi fugit repellat at sunt pariatur nisi perspiciatis.
            </p>
        </div>
    </div>
</section>

<section class="sf_single--barangay-content sf_padding_section">
    <div class="cntr">
        <h3>About Barangay <?php the_title(); ?></h3>
        <?php the_content(); ?>
    </div>
</section>
