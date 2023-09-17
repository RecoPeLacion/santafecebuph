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

<section class="sf_officialsSection sf_padding_section">
    <div class="cntr">
        <div class="sf_officialsWrapper">
            <div class="sf_officialsCard">
                <div class="sf_officialsTitle">
                    <h2>Municipality Mayor</h2>
                </div>
                <ul class="sf_page--councilor-list sf_page--mayor-list">
                    <?php
                        if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
                        $temp = $wp_query;
                        $wp_query = null;
                        $args = array( 'post_type' => 'mayor', 'order'=>'DESC', 'posts_per_page' => -1, 'paged' => $paged);
                        $wp_query = new WP_Query();
                        $wp_query->query( $args );
                        while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>
                            <li id="post-<?php the_ID(); ?>" class="sf_page--councilor-item">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="sf_page--councilor-card">
                                        <div class="sf_page--councilor-img">
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
                                    </div>
                                </a>
                            </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="sf_officialsCard">
                <div class="sf_officialsTitle">
                    <h2>Municipality Vice Mayor</h2>
                </div>
                <ul class="sf_page--councilor-list sf_page--mayor-list">
                    <?php
                        if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
                        $temp = $wp_query;
                        $wp_query = null;
                        $args = array( 'post_type' => 'vice-mayor', 'order'=>'DESC', 'posts_per_page' => -1, 'paged' => $paged);
                        $wp_query = new WP_Query();
                        $wp_query->query( $args );
                        while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>
                            <li id="post-<?php the_ID(); ?>" class="sf_page--councilor-item">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="sf_page--councilor-card">
                                        <div class="sf_page--councilor-img">
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
                                    </div>
                                </a>
                            </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="sf_officialsCard">
                <div class="sf_officialsTitle">
                    <h2>Municipality Councilor</h2>
                </div>
                <ul class="sf_page--councilor-list">
                    <?php
                        if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
                        $temp = $wp_query;
                        $wp_query = null;
                        $args = array( 'post_type' => 'councilor', 'order'=>'DESC', 'posts_per_page' => -1, 'paged' => $paged);
                        $wp_query = new WP_Query();
                        $wp_query->query( $args );
                        while ($wp_query->have_posts()) : $wp_query->the_post();
                            ?>
                            <li id="post-<?php the_ID(); ?>" class="sf_page--councilor-item">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="sf_page--councilor-card">
                                        <div class="sf_page--councilor-img">
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
                                    </div>
                                </a>
                            </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();