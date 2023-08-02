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
            <h2>Municipality Ordinances</h2>
        </div>
        <div class="sf_page--table-wrapper">
            <?php echo do_shortcode('[ordinances posts_per_page="8"]'); ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>