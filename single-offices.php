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

    <section class="sf_officeBanner sf_padding_section">
        <div class="cntr">
            <div class="sf_officeBannerWrap">
                <div class="sf_officeBannerTitle">
                    <h1>
                        <?php the_title(); ?> Office
                    </h1>
                </div>
                <?php if (is_single(888)) {
                    ?>
                        <p>
                        Welcome to the Santa Fe Mayor's Office, where we are dedicated to fostering a vibrant and inclusive community for all residents and visitors alike. Our commitment to excellence in governance and public service is at the heart of everything we do. We are proud to serve as the bridge between our municipalities diverse population and its leadership, ensuring that Santa Fe continues to thrive as a place of culture, innovation, and opportunity. Together, we can shape a brighter future for our beloved municipality.
                        </p>
                    <?php
                } else {
                    ?>
                        <p>
                            Welcome to the Santa Fe Municipality Offices – Your Gateway to Efficient Local Governance! We are committed to serving our vibrant community with dedication and transparency. Explore our website to access essential resources, stay informed about local initiatives, and connect with your local government. Together, we're building a brighter future for Santa Fe!
                        </p>
                    <?php
                }
                ?>
                
            </div>
        </div>
    </section>

    <section class="sf_officeSection sf_padding_section">
        <div class="cntr">
            <div class="sf_officeContent">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

<?php
get_footer();
?>