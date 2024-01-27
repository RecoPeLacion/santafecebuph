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
                Welcome to the Santa Fe Municipality Offices – Your Gateway to Efficient Local Governance! We are committed to serving our vibrant community with dedication and transparency. Explore our website to access essential resources, stay informed about local initiatives, and connect with your local government. Together, we're building a brighter future for Santa Fe!
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