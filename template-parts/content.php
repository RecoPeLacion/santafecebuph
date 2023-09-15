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
                    <?php the_title(); ?>
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
            <div class="sf_officeContentImg">
                <?php if(has_post_thumbnail()): ?>
                    <?php
                        $thumb_id = get_post_thumbnail_id(get_the_ID());
                        $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                    ?>
                    <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/front.jpg" alt="">
                <?php endif; ?>
            </div>
            <?php the_content(); ?>
        </div>
    </div>
</section>