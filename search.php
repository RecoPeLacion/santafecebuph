<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TEMPLATE NAME
 */

get_header();
?>

<section class="sf_officeBanner sf_searchResult sf_padding_section">
    <div class="cntr">
        <div class="sf_officeBannerWrap">
            <div class="sf_officeBannerTitle">
                <h1>
                    Search results for: <?php echo esc_html( get_search_query( true ) ); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="sf_searchSection sf_padding_section">
    <div class="cntr">

        <ul class="sf_searchResList">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li>
                    <a href="#">
                        <div class="sf_searchResCard">
                            <div class="sf_searchResImg">
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
                            <div class="sf_searchResContent">
                                <h3><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </a>
                </li>
            <?php endwhile; else : ?>
                <p>No results found. <?php echo esc_html( get_search_query( false ) ); ?></p>
            <?php endif; ?>
        </ul>

        
    </div>
</section>

<?php get_footer(); ?>