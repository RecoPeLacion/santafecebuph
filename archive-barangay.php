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

<section class="sf_page--section sf_padding_section">
    <div class="cntr">
        <div class="sf_page--title">
            <h2>Barangays</h2>
        </div>
        <ul class="sf_page--barangay-list">
            <?php
                if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {$paged = get_query_var('page'); } else {$paged = 1; }
                $temp = $wp_query;
                $wp_query = null;
                $args = array( 'post_type' => 'barangay', 'order'=>'DESC', 'posts_per_page' => 8, 'paged' => $paged);
                $wp_query = new WP_Query();
                $wp_query->query( $args );
                while ($wp_query->have_posts()) : $wp_query->the_post();
                    ?>
                    <li id="post-<?php the_ID(); ?>" class="sf_page--barangay-item">
                        <a href="<?php the_permalink(); ?>" class="sf_page--barangay--link">
                            <div class="sf_page--barangay--card">
                                <div class="sf_page--barangay-img">
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
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php wp_pagination(); ?>
        </ul>
    </div>
</section>

<?php
get_footer();
?>