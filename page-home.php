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

<!-- banner -->
<section class="sf_banner">
    <div class="cntr">
        <div class="sf_banner--wrapper">
            <div class="sf_banner--content">
                <p>BAYAN NG SANTA FE, LALAWIGAN NG CEBU</p>
                <h1>
                    WELCOME TO SANTA FE WEB PORTAL
                </h1>
                <p>Santa Fe, officially the Municipality of Santa Fe, is a 5th class municipality in the province of Cebu, Philippines. According to the 2020 census, it has a population of 34,471 people.</p>
            </div>
        </div>
    </div>
</section>
<!-- end of banner -->

<!-- reso and ordinance -->
<section class="sf_ord-reso">
    <div class="cntr">
        <div class="sf_ord-reso--wrapper">
            <div class="sf_ord-reso--col">
                <div class="sf_title">
                    <h2>Latest Resolutions</h2>
                </div>
                <div class="sf_ord-reso--button">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                        View All Resolutions
                    </a>
                </div>
                <?php echo do_shortcode('[resolutions posts_per_page="2"]'); ?>
            </div>
            <div class="sf_ord-reso--col">
                <div class="sf_title">
                    <h2>Latest Ordinances</h2>
                </div>
                <div class="sf_ord-reso--button">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
                        View All Ordinances
                    </a>
                </div>
                <?php echo do_shortcode('[ordinances posts_per_page="2"]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- end of reso and ordinance -->

<!-- founding day -->
<section class="sf_founding">
    <div class="cntr">
        <div class="sf_title sf_title--02">
            <h2>Founding Day</h2>
        </div>
    </div>
</section>
<!-- end of founding day -->

<!-- upcoming events -->
<section class="sf_upcoming">
    <div class="cntr">
        <div class="sf_title sf_title--02">
            <h2>Santa Fe Upcoming Events</h2>
        </div>
        <ul class="sf_upcoming--list">
            <?php
            // upcoming events query
            $upcoming_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3, 'order'=> 'DESC')); ?>
            <?php if ( $upcoming_query->have_posts() ) : ?>
                <?php while ( $upcoming_query->have_posts() ) : $upcoming_query->the_post(); ?>
                <li class="sf_upcoming--item">
                    <a href="<?php the_permalink(); ?>" class="sf_upcoming--link">
                        <div class="sf_upcoming--card">
                            <div class="sf_upcoming--img">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php
                                        $thumb_id = get_post_thumbnail_id(get_the_ID());
                                        $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                    ?>
                                    <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/blog01.png" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="sf_upcoming--content">
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                                <div class="sf_upcoming--button">
                                    Read More
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <h4 class="no-post tc"><?php _e( 'Coming Soon...' ); ?></h4>
            <?php endif; ?>
        </ul>
    </div>
</section>
<!-- end of upcoming events -->

<!-- government policies -->
<section class="sf_gov">
    <div class="cntr">
        <div class="sf_title sf_title--02">
            <h2>Government Policies</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus accumsan nisl, et tempus ligula laoreet sed. Maecenas semper libero sit amet sapien porttitor, eget viverra odio pharetra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sem velit, interdum interdum eros eu, pulvinar placerat augue.</p>
        </div>
        <ul class="sf_gov--list">
            <?php
            // gov policies query
            $government_pol = new WP_Query(array('post_type'=>'government-policies', 'post_status'=>'publish', 'posts_per_page'=>15, 'order'=> 'DESC')); ?>
            <?php if ( $government_pol->have_posts() ) : ?>
                <?php while ( $government_pol->have_posts() ) : $government_pol->the_post(); ?>
                <li class="sf_gov--item">
                    <a href="#" class="sf_gov--link">
                        <div class="sf_gov--card">
                            <div class="sf_gov--img">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php
                                        $thumb_id = get_post_thumbnail_id(get_the_ID());
                                        $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                    ?>
                                    <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri()?>/assets/img/blog01.png" alt="">
                                <?php endif; ?>
                            </div>
                            <h3 class="sf_gov--title"><?php the_title(); ?></h3>
                        </div>
                    </a>
                </li>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <h4 class="no-post tc"><?php _e( 'Coming Soon...' ); ?></h4>
            <?php endif; ?>
        </ul>
    </div>
</section>
<!-- end of government policies -->

<!-- sta fe videos -->
<section class="sf_videos">
    <div class="cntr">
        <div class="sf_title sf_title--02">
            <h2>Santa Fe Latest Videos</h2>
        </div>
        <ul class="sf_videos--list">
            
            <?php
            // gov videos query
            $government_vid = new WP_Query(array('post_type'=>'videos', 'post_status'=>'publish', 'posts_per_page'=>15, 'order'=> 'DESC')); ?>
            <?php if ( $government_vid->have_posts() ) : ?>
                <?php while ( $government_vid->have_posts() ) : $government_vid->the_post(); ?>
                <li class="sf_videos--item">
                    <a href="#" class="sf_videos--link sf_videos--openModal" data-modal="popup-video-<?php the_ID(); ?>">
                        <div class="sf_videos--card">
                            <h3 class="sf_videos--title"><?php the_title(); ?></h3>
                            <div class="sf_videos--footer">
                                <span class="sf_videos--author">Admin</span>
                                <span class="sf_videos--date"><?php the_date(); ?></span>
                            </div>
                        </div>
                    </a>
                    <div id="popup-video-<?php the_ID(); ?>" class="modalVideo">
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/w7sm6lY4u_k?list=RDEMCzsX-dB8k_miztMg5jkGZg" title="<?php the_title(); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <h4 class="no-post tc"><?php _e( 'Coming Soon...' ); ?></h4>
            <?php endif; ?>
        </ul>
    </div>
</section>
<!-- end of sta fe videos -->

<!-- sta fe social -->
<section class="sf_social">
    <div class="cntr">
        <div class="sf_title sf_title--02">
            <h2>Santa Fe Social Feed</h2>
        </div>
        <div class="sf_social--wrapper">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100087380602469&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        </div>
    </div>
</section>
<!-- end of sta fe social -->

<?php
get_footer();