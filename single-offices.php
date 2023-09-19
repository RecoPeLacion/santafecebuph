<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEMPLATENAME
 */

get_header();
?>

    <section class="sf_officeBanner sf_padding_section">
        <div class="cntr">
            <div class="sf_officeBannerWrap">
                <div class="sf_officeBannerTitle">
                    <h1>
                        <?php the_title(); ?> Office
                    </h1>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae modi cumque magnam nemo nobis dolore, perferendis quam doloribus iusto sit accusamus animi fugit repellat at sunt pariatur nisi perspiciatis.
                </p>
            </div>
        </div>
    </section>

    <section class="sf_officeSection sf_padding_section">
        <div class="cntr">
            <div class="sf_officeContent">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

<?php
get_footer();
?>