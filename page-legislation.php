<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEMPLATENAME
 */

get_header();
?>

<!-- reso and ordinance -->
<section class="sf_ord-reso sf_padding_section">
    <div class="cntr">
        <div class="sf_ord-reso--wrapper">
            <div class="sf_ord-reso--col">
                <div class="sf_title">
                    <h2>Latest Resolutions</h2>
                </div>
                <div class="sf_ord-reso--button">
                    <a href="<?php bloginfo('url'); ?>/resolutions">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                        View All Resolutions
                    </a>
                </div>
                
                <!-- resolution -->
                <?php
                // upcoming events query
                $upcoming_query = new WP_Query(array('post_type'=>'resolutions', 'post_status'=>'publish', 'posts_per_page'=>3, 'order'=> 'DESC')); ?>
                <?php if ( $upcoming_query->have_posts() ) : ?>
                    <?php while ( $upcoming_query->have_posts() ) : $upcoming_query->the_post(); ?>
                    <div class="card_list">
                        <div class="card_list_container">
                            <div class="card_list_left">
                                <div class="card_list_wrapper">
                                    <div class="card_list_img">
                                        <?php if(has_post_thumbnail()): ?>
                                        <?php
                                            $thumb_id = get_post_thumbnail_id(get_the_ID());
                                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                        ?>
                                        <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/prof.png" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card_list_content">
                                        <h3>Hon. <?php the_field('author'); ?></h3>
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_list_right">
                                <div class="card_list_button">
                                    <a href="<?php the_field('pdf_link'); ?>" target="_blank">View Ordinances</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <h4 class="no-post tc"><?php _e( 'Coming Soon...' ); ?></h4>
                <?php endif; ?>
                <!-- end of resolutions -->

            </div>
            <div class="sf_ord-reso--col">
                <div class="sf_title">
                    <h2>Latest Ordinances</h2>
                </div>
                <div class="sf_ord-reso--button">
                    <a href="<?php bloginfo('url'); ?>/ordinances">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                        View All Ordinances
                    </a>
                </div>
                
                <!-- ordinance -->
                <?php
                // upcoming events query
                $upcoming_query = new WP_Query(array('post_type'=>'ordinances', 'post_status'=>'publish', 'posts_per_page'=>3, 'order'=> 'DESC')); ?>
                <?php if ( $upcoming_query->have_posts() ) : ?>
                    <?php while ( $upcoming_query->have_posts() ) : $upcoming_query->the_post(); ?>
                    <div class="card_list">
                        <div class="card_list_container">
                            <div class="card_list_left">
                                <div class="card_list_wrapper">
                                    <div class="card_list_img">
                                        <?php if(has_post_thumbnail()): ?>
                                        <?php
                                            $thumb_id = get_post_thumbnail_id(get_the_ID());
                                            $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                        ?>
                                        <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                        <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri()?>/assets/img/prof.png" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="card_list_content">
                                        <h3>Hon. <?php the_field('author'); ?></h3>
                                        <p><?php the_title(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card_list_right">
                                <div class="card_list_button">
                                    <a href="<?php the_field('pdf_link'); ?>" target="_blank">View Ordinances</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <h4 class="no-post tc"><?php _e( 'Coming Soon...' ); ?></h4>
                <?php endif; ?>
                <!-- ordinance -->

            </div>
        </div>
    </div>
</section>
<!-- end of reso and ordinance -->

<?php
get_footer();