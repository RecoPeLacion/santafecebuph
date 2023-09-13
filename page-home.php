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

<!-- slider -->
<section class="sf_slider_section">
    <div class="sf_slider_wrapper">
        <div class="sf_slider_content">
            <h1>
                Welcome to Santa Fe Web Portal
            </h1>
            <p>Santa Fe, officially the Municipality of Santa Fe, is a 5th class municipality in the province of Cebu, Philippines. According to the 2020 census, it has a population of 34,471 people.</p>
            <div class="sf_slider_button">
                <a href="#">
                    Mayor's Office
                </a>
            </div>
        </div>
    </div>
    <div class="sf_slider">
        <div class="sf_slider_item">
            <div class="sf_slider_card">
                <div class="sf_slider_img">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/slide01.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="sf_slider_item">
            <div class="sf_slider_card">
                <div class="sf_slider_img">
                    <img src="<?php echo get_template_directory_uri()?>/assets/img/slide02.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- slider -->

<!-- what's new -->
<section class="sf_what--new sf_padding_section">
    <div class="cntr">
        <div class="sf_what--new-row">
            <div class="sf_what--new-col-08">
                <div class="sf_what--new-content">
                    <small>Welcome to Santa Fe! Today is <?php echo date('l'); ?>, <?php echo date('F j, Y'); ?></small>
                    <h3>What's new in Santa Fe?</h3>
                    <div class="sf_what--new-vid">
                        <iframe class="elementor-video" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Bantayan Island Travel Guide 2023 | Where To Eat, Stay? How To Get Here? Paradise of Northern Cebu" width="100%" height="380" src="https://www.youtube.com/embed/C6HBInrPEn0?controls=0&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=1&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fryanbalbuena.com&amp;widgetid=1" id="widget2"></iframe>
                    </div>
                </div>
            </div>
            <div class="sf_what--new-col-04">
                <ul class="sf_what--new-social">
                    <li>
                        <a href="#">
                            <svg class="e-font-icon-svg e-fab-facebook-f" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="e-font-icon-svg e-fab-tiktok" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"></path></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg class="e-font-icon-svg e-fab-instagram" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                        </a>
                    </li>
                </ul>
                <div class="sf_what--new-news">
                    <h3>Latest News</h3>
                    <ul class="sf_what--news-list">
                        <?php
                        // upcoming events query
                        $upcoming_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>5, 'order'=> 'DESC')); ?>
                        <?php if ( $upcoming_query->have_posts() ) : ?>
                            <?php while ( $upcoming_query->have_posts() ) : $upcoming_query->the_post(); ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="sf_what--news-card">
                                        <div class="sf_what--news-img">
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
                                        <div class="sf_what--news-content">
                                            <h3><?php the_title(); ?></h3>
                                            <p>
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg> <?php the_date(); ?>
                                            </p>
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
            </div>
        </div>
    </div>
</section>
<!-- end of what's new -->

<!-- frontline -->
<section class="sf_frontline sf_padding_section">
    <div class="cntr">
        <div class="sf_newTitle">
            <h4 class="sf_subTitle">CITIZENS’ CHARTER ONLINE</h4>
            <h3 class="sf_mainTitle">FRONTLINE SERVICES</h3>
            <p class="sf_subTagline">
                Sed egestas consectetur dui, eget consequat magna. Sed magna sapien, iaculis eu felis non, mollis congue tortor. Aliquam posuere neque in ullamcorper pharetra. Vestibulum id risus pharetra, semper lorem sed, ultricies felis. Curabitur ac felis vitae quam maximus auctor. Aliquam ultricies, dolor eu luctus pellentesque, diam ipsum aliquam quam, sed porta orci erat quis sapien. Etiam lacinia blandit metus. In ultrices nibh in mi dapibus tempus. Nam a nunc quis ligula porta consequat. Proin venenatis, nibh ut maximus pellentesque, diam tellus vulputate orci, sit amet porttitor nunc justo ac elit. Donec ex urna, malesuada in consequat nec, sodales quis dolor. Maecenas sed velit laoreet, semper dui nec, pretium neque. Pellentesque accumsan leo vitae feugiat blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
        <ul class="sf_frontLineList">
            <li>
                <a href="#">
                    <div class="sf_frontLineListCard">
                        <div class="sf_frontLineListImg">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/front.jpg" alt="FrontLine Image">
                        </div>
                        <div class="sf_frontLineContent">
                            <h3>Municipal Mayor's Office</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit dolor</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="sf_frontLineListCard">
                        <div class="sf_frontLineListImg">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/front.jpg" alt="FrontLine Image">
                        </div>
                        <div class="sf_frontLineContent">
                            <h3>Municipal Health Office</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit dolor</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div class="sf_frontLineListCard">
                        <div class="sf_frontLineListImg">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/front.jpg" alt="FrontLine Image">
                        </div>
                        <div class="sf_frontLineContent">
                            <h3>Senior Citizens</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit dolor</p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="sf_newButton">
            <a href="#">
                View full list of services
            </a>
        </div>
        <div class="sf_onlineServices">
            <div class="sf_newTitle">
                <h3 class="sf_mainTitle">ONLINE SERVICES</h3>
            </div>
            <ul class="sf_onlineServicesList">
                <li>
                    <a href="#">
                        <div class="sf_onlineServicesCard">
                            <div class="sf_onlineServicesImg">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/front.jpg" alt="FrontLine Image">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="sf_onlineServicesCard">
                            <div class="sf_onlineServicesImg">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/front.jpg" alt="FrontLine Image">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="sf_onlineServicesCard">
                            <div class="sf_onlineServicesImg">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/front.jpg" alt="FrontLine Image">
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="sf_onlineServicesCard">
                            <div class="sf_onlineServicesImg">
                                <img src="<?php echo get_template_directory_uri()?>/assets/img/front.jpg" alt="FrontLine Image">
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end of frontline -->

<!-- census -->
<section class="sf_census sf_padding_section">
    <div class="cntr">
        <div class="sf_newTitle">
            <h3 class="sf_mainTitle">Census Population</h3>
            <p class="sf_subTagline">
                Sed egestas consectetur dui, eget consequat magna. Sed magna sapien, iaculis eu felis non, mollis congue tortor.
            </p>
        </div>
    </div>
</section>
<!-- end of census -->

<!-- elected -->
<section class="sf_elected sf_padding_section">
    <div class="cntr">
        <div class="sf_newTitle">
            <h4 class="sf_subTitle">YOUR ELECTED</h4>
            <h3 class="sf_mainTitle">CITY OFFICIALS</h3>
            <p class="sf_subTagline">
                Meet the people mandated to lead the City Government and serve the people of Santa Fe.
            </p>
        </div>
        <div class="sf_electedWrapper">
            <div class="sf_electedImg">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/elected.jpg" alt="FrontLine Image">
            </div>
        </div>
        <div class="sf_newButton">
            <a href="#">
                KNOW MORE ABOUT THE MAYOR AND THE CITY COUNCIL
            </a>
        </div>
    </div>
</section>
<!-- end of elected -->

<!-- maps -->
<section class="sf_map sf_padding_section">
    <div class="cntr">
        <div class="sf_newTitle">
            <h3 class="sf_mainTitle">Santa Fe Locations</h3>
            <p class="sf_subTagline">
                Meet the people mandated to lead the City Government and serve the people of Santa Fe.
            </p>
        </div>
        <div class="sf_mapWrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125221.28360466624!2d123.74827993281083!3d11.249261483739781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a87d5fc950c8fb%3A0x9dbab0f8f9885ad1!2sSanta%20Fe%2C%20Cebu!5e0!3m2!1sen!2sph!4v1694314593958!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- end of maps -->

<!-- participation -->
<section class="sf_participation sf_padding_section">
    <div class="cntr">
        <div class="sf_newTitle">
            <h3 class="sf_mainTitle">People Participation</h3>
            <p class="sf_subTagline">
                Santa Fe prioritizes citizen participation in governance, seeing them as active partners in creating a livable, sustainable, and equitable community. This approach fosters a sense of ownership and responsibility among citizens, resulting in positive change and making Santa Fe a model for other cities.
            </p>
        </div>
        <div class="sf_participationWrapper">
            <ul class="sf_participationList">
                <li>
                    <div class="sf_participationCard">
                        <div class="sf_participationImg">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/The-NCPC-Logo.png" alt="FrontLine Image">
                        </div>
                        <h3>Green Santa Fe i-Engage Ordinance</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </li>
                <li>
                    <div class="sf_participationCard">
                        <div class="sf_participationImg">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/The-NCPC-Logo.png" alt="FrontLine Image">
                        </div>
                        <h3>Empowering Ordinary Citizens</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </li>
                <li>
                    <div class="sf_participationCard">
                        <div class="sf_participationImg">
                            <img src="<?php echo get_template_directory_uri()?>/assets/img/The-NCPC-Logo.png" alt="FrontLine Image">
                        </div>
                        <h3>Civil Society Organizations</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end of participation -->

<!-- emergency -->
<section class="sf_emergency sf_padding_section">
    <div class="cntr">
        <div class="sf_newTitle">
            <h3 class="sf_mainTitle">Emergency Hotlines</h3>
        </div>
        <div class="sf_emergencyWrap">
            <ul class="sf_emergencyList">
                <li>
                    <div class="sf_emergencyCard">
                        <div class="sf_emergencyIcon">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-mobile-alt" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg"><path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z"></path></svg>
                        </div>
                        <h3>Mobile (ComCen)</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </li>
                <li>
                    <div class="sf_emergencyCard">
                        <div class="sf_emergencyIcon">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
                        </div>
                        <h3>Landline (COMCEN)</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </li>
                <li>
                    <div class="sf_emergencyCard">
                        <div class="sf_emergencyIcon">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-fire-extinguisher" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M434.027 26.329l-168 28C254.693 56.218 256 67.8 256 72h-58.332C208.353 36.108 181.446 0 144 0c-39.435 0-66.368 39.676-52.228 76.203-52.039 13.051-75.381 54.213-90.049 90.884-4.923 12.307 1.063 26.274 13.37 31.197 12.317 4.926 26.279-1.075 31.196-13.37C75.058 112.99 106.964 120 168 120v27.076c-41.543 10.862-72 49.235-72 94.129V488c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24V240c0-44.731-30.596-82.312-72-92.97V120h40c0 2.974-1.703 15.716 10.027 17.671l168 28C441.342 166.89 448 161.25 448 153.834V38.166c0-7.416-6.658-13.056-13.973-11.837zM144 72c-8.822 0-16-7.178-16-16s7.178-16 16-16 16 7.178 16 16-7.178 16-16 16z"></path></svg>
                        </div>
                        <h3>Bureau of Fire Protection</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                    </div>
                </li>
            </ul>
            <div class="sf_newButton">
                <a href="#">
                    LIST OF IMPORTANT NUMBERS
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end of emergency -->



<?php
get_footer();