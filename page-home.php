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

<?php
get_footer();