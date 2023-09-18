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

<?php if(has_post_thumbnail()): ?>
<?php
    $thumb_id = get_post_thumbnail_id(get_the_ID());
    $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
?>
    <section class="sf_officeBanner sf_tourBanner sf_padding_section" style="background-image: url(<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>);">
        <div class="cntr">
            <div class="sf_officeBannerWrap">
                <div class="sf_officeBannerTitle">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae modi cumque magnam nemo nobis dolore, perferendis quam doloribus iusto sit accusamus animi fugit repellat at sunt pariatur nisi perspiciatis.
                </p>
            </div>
        </div>
    </section>
<?php endif; ?>

    <section class="sf_officeSection sf_padding_section">
        <div class="cntr">
            <div class="sf_officeContent">
                <iframe src="<?php the_field('tourism_pdf'); ?>" width="100%" height="1000px" frameborder="0"></iframe>
            </div>
        </div>
    </section>

<?php
get_footer();
?>