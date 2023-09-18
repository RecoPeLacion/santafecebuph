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

<section class="sf_officeBanner sf_padding_section">
    <div class="cntr">
        <div class="sf_officeBannerWrap">
            <div class="sf_officeBannerTitle">
                <h1>
                    Tourist Establishments
                </h1>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae modi cumque magnam nemo nobis dolore, perferendis quam doloribus iusto sit accusamus animi fugit repellat at sunt pariatur nisi perspiciatis.
            </p>
        </div>
    </div>
</section>

<section class="sf_pageTourism sf_padding_section">
    <div class="cntr">
        <ul class="sf_pageTourList">
            
            <?php
                if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
                $temp = $wp_query;
                $wp_query = null;
                $args = array( 'post_type' => 'tourism', 'order'=>'DESC', 'posts_per_page' => -1, 'paged' => $paged);
                $wp_query = new WP_Query();
                $wp_query->query( $args );
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    ?>
                    <li id="post-<?php the_ID(); ?>" class="sf_page--tourism-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="sf_pageTourCard">
                                <div class="sf_pageTourImg">
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
                                <div class="sf_pageTourContent">
                                    <h3><?php the_title(); ?></h3>
                                    <div class="sf_pageTourButton">
                                        <span>View More</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
            <?php endwhile; ?>
        </ul>
    </div>
</section>

<?php
get_footer();