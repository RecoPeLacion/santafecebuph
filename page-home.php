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
                Welcome to<br> Santa Fe<br> Web Portal
            </h1>
            <p>Santa Fe, officially the Municipality of Santa Fe, is a 4th class municipality in the province of Cebu, Philippines. According to the 2020 census, it has a population of 34,471 people.</p>
            <div class="sf_slider_button">
                <a href="<?php bloginfo('url'); ?>/offices/mayors/">
                    Mayor's Office
                </a>
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
                        <iframe class="elementor-video" frameborder="0" allowfullscreen="1" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Bantayan Island Travel Guide 2023 | Where To Eat, Stay? How To Get Here? Paradise of Northern Cebu" width="100%" height="380" src="https://www.youtube.com/embed/BwDtpKZ8B7Q?controls=0&amp;rel=0&amp;playsinline=0&amp;modestbranding=0&amp;autoplay=1&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fryanbalbuena.com&amp;widgetid=1" id="widget2"></iframe>
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
                    <h3>Latest Feeds</h3>
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100087380602469%26ref%3Dembed_page&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
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
            <h3 class="sf_mainTitle">Santa Fe Services</h3>
            <p class="sf_subTagline">
            At Santa Fe's Finest, we take pride in serving our vibrant community with unwavering care and steadfast commitment. Our mission is to enhance the lives of the people of Santa Fe through dedicated service and genuine compassion.
            </p>
        </div>
        <ul class="sf_frontLineList">
            <li>
                <a href="<?php bloginfo('url'); ?>/offices/mayors/">
                    <div class="sf_frontLineListCard">
                        <div class="sf_frontLineListImg">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M240.1 4.2c9.8-5.6 21.9-5.6 31.8 0l171.8 98.1L448 104l0 .9 47.9 27.4c12.6 7.2 18.8 22 15.1 36s-16.4 23.8-30.9 23.8H32c-14.5 0-27.2-9.8-30.9-23.8s2.5-28.8 15.1-36L64 104.9V104l4.4-1.6L240.1 4.2zM64 224h64V416h40V224h64V416h48V224h64V416h40V224h64V420.3c.6 .3 1.2 .7 1.8 1.1l48 32c11.7 7.8 17 22.4 12.9 35.9S494.1 512 480 512H32c-14.1 0-26.5-9.2-30.6-22.7s1.1-28.1 12.9-35.9l48-32c.6-.4 1.2-.7 1.8-1.1V224z"/></svg>
                        </div>
                        <div class="sf_frontLineContent">
                            <h3>Municipal Mayor's Office</h3>
                            <p>The Mayor's office leads with innovation and community focus, shaping a brighter future for our city.</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/offices/health/">
                    <div class="sf_frontLineListCard">
                        <div class="sf_frontLineListImg">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1h32V448c0 35.3 28.7 64 64 64H448.5c35.5 0 64.2-28.8 64-64.3l-.7-160.2h32zM256 208c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v48h48c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H320v48c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V320H208c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h48V208z"/></svg>
                        </div>
                        <div class="sf_frontLineContent">
                            <h3>Municipal Health Office</h3>
                            <p>The Municipal Health Office ensures community well-being through accessible healthcare and public health programs.</p>
                        </div>
                    </div>
                </a>
            </li>
            <li>
                <a href="<?php bloginfo('url'); ?>/offices/gso/">
                    <div class="sf_frontLineListCard">
                        <div class="sf_frontLineListImg">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M272 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm-8 187.3l47.4 57.1c11.3 13.6 31.5 15.5 45.1 4.2s15.5-31.5 4.2-45.1l-73.7-88.9c-18.2-22-45.3-34.7-73.9-34.7H177.1c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352h16V480c0 17.7 14.3 32 32 32s32-14.3 32-32V235.3zM352 376c0-4.4 3.6-8 8-8s8 3.6 8 8V488c0 13.3 10.7 24 24 24s24-10.7 24-24V376c0-30.9-25.1-56-56-56s-56 25.1-56 56v8c0 13.3 10.7 24 24 24s24-10.7 24-24v-8z"/></svg>
                        </div>
                        <div class="sf_frontLineContent">
                            <h3>Senior Citizens</h3>
                            <p>The Senior Citizen Office enriches elder lives through essential services and support for an active retirement.</p>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
        <div class="sf_newButton">
            <a href="<?php bloginfo('url'); ?>/offices">
                View full list of services
            </a>
        </div>
    </div>
</section>
<!-- end of frontline -->

<!-- elected -->
<section class="sf_elected sf_padding_section">
    <div class="cntr">
        <div class="sf_newTitle">
            <h4 class="sf_subTitle">YOUR ELECTED</h4>
            <h3 class="sf_mainTitle">CITY OFFICIALS</h3>
            <p class="sf_subTagline">
                Introducing the individuals entrusted with the responsibility of governing the municipality of Santa Fe, dedicated to serving its residents.
            </p>
        </div>
        <div class="sf_electedWrapper">
            <div class="sf_electedImg">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/officialsfin.jpg" alt="FrontLine Image">
            </div>
        </div>
        <div class="sf_newButton">
            <a href="<?php bloginfo('url'); ?>/officials">
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
        </div>
        <div class="sf_mapWrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7828.740087984577!2d123.77798078143813!3d11.160213415244321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a88915d0211b39%3A0x30b1e7a7a80be7c7!2ssanta%20fe%20bantayan%20island!5e0!3m2!1sen!2sph!4v1695122190812!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            Santa Fe's strength lies in the active participation of its residents, who come together to celebrate traditions, drive local initiatives, and create a welcoming atmosphere that fosters unity and mutual support. Whether it's volunteering, engaging in civic activities, or contributing to local causes, the people of Santa Fe are the heart and soul of our community, making it a place where everyone can feel connected and valued.
            </p>
        </div>
        <div class="sf_participationWrapper">
            <ul class="sf_participationList">
                <li>
                    <div class="sf_participationCard">
                        <div class="sf_participationImg">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 32c477.6 0 366.6 317.3 367.1 366.3L448 480h-26l-70.4-71.2c-39 4.2-124.4 34.5-214.4-37C47 300.3 52 214.7 0 32zm79.7 46c-49.7-23.5-5.2 9.2-5.2 9.2 45.2 31.2 66 73.7 90.2 119.9 31.5 60.2 79 139.7 144.2 167.7 65 28 34.2 12.5 6-8.5-28.2-21.2-68.2-87-91-130.2-31.7-60-61-118.6-144.2-158.1z"/></svg>
                        </div>
                        <h3>Green Santa Fe Engage Ordinance</h3>
                        <p>Santa Fe is not just a municipality; it's a green community and a champion for environmental advocacy. With a deep commitment to sustainability, we're dedicated to preserving our natural surroundings and leading the way in eco-friendly initiatives that benefit our residents and the planet</p>
                    </div>
                </li>
                <li>
                    <div class="sf_participationCard">
                        <div class="sf_participationImg">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M72 88a56 56 0 1 1 112 0A56 56 0 1 1 72 88zM64 245.7C54 256.9 48 271.8 48 288s6 31.1 16 42.3V245.7zm144.4-49.3C178.7 222.7 160 261.2 160 304c0 34.3 12 65.8 32 90.5V416c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V389.2C26.2 371.2 0 332.7 0 288c0-61.9 50.1-112 112-112h32c24 0 46.2 7.5 64.4 20.3zM448 416V394.5c20-24.7 32-56.2 32-90.5c0-42.8-18.7-81.3-48.4-107.7C449.8 183.5 472 176 496 176h32c61.9 0 112 50.1 112 112c0 44.7-26.2 83.2-64 101.2V416c0 17.7-14.3 32-32 32H480c-17.7 0-32-14.3-32-32zm8-328a56 56 0 1 1 112 0A56 56 0 1 1 456 88zM576 245.7v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM320 32a64 64 0 1 1 0 128 64 64 0 1 1 0-128zM240 304c0 16.2 6 31 16 42.3V261.7c-10 11.3-16 26.1-16 42.3zm144-42.3v84.7c10-11.3 16-26.1 16-42.3s-6-31.1-16-42.3zM448 304c0 44.7-26.2 83.2-64 101.2V448c0 17.7-14.3 32-32 32H288c-17.7 0-32-14.3-32-32V405.2c-37.8-18-64-56.5-64-101.2c0-61.9 50.1-112 112-112h32c61.9 0 112 50.1 112 112z"/></svg>
                        </div>
                        <h3>Empowering Ordinary Citizens</h3>
                        <p>The Municipality of Santa Fe is steadfast in its mission to empower ordinary citizens, giving them the tools, resources, and opportunities they need to play an active and influential role in shaping the future of our community</p>
                    </div>
                </li>
                <li>
                    <div class="sf_participationCard">
                        <div class="sf_participationImg">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M256 64H384v64H256V64zM240 0c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48h48v32H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h96v32H80c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48H240c26.5 0 48-21.5 48-48V368c0-26.5-21.5-48-48-48H192V288H448v32H400c-26.5 0-48 21.5-48 48v96c0 26.5 21.5 48 48 48H560c26.5 0 48-21.5 48-48V368c0-26.5-21.5-48-48-48H512V288h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H352V192h48c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H240zM96 448V384H224v64H96zm320-64H544v64H416V384z"/></svg>
                        </div>
                        <h3>Civil Society Organizations</h3>
                        <p>The Municipality of Santa Fe strongly supports civil society organizations, recognizing their invaluable contributions in fostering a vibrant, engaged, and inclusive community that works collaboratively for the betterment of all.</p>
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
                        <h3>Mayor's Office</h3>
                        <a href="tel:4389610">438 9610</a>
                    </div>
                </li>
                <li>
                    <div class="sf_emergencyCard">
                        <div class="sf_emergencyIcon">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-phone-alt" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
                        </div>
                        <h3>PNP</h3>
                        <a href="tel:09985986377">09985986377</a>
                    </div>
                </li>
                <li>
                    <div class="sf_emergencyCard">
                        <div class="sf_emergencyIcon">
                            <svg aria-hidden="true" class="e-font-icon-svg e-fas-fire-extinguisher" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M434.027 26.329l-168 28C254.693 56.218 256 67.8 256 72h-58.332C208.353 36.108 181.446 0 144 0c-39.435 0-66.368 39.676-52.228 76.203-52.039 13.051-75.381 54.213-90.049 90.884-4.923 12.307 1.063 26.274 13.37 31.197 12.317 4.926 26.279-1.075 31.196-13.37C75.058 112.99 106.964 120 168 120v27.076c-41.543 10.862-72 49.235-72 94.129V488c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24V240c0-44.731-30.596-82.312-72-92.97V120h40c0 2.974-1.703 15.716 10.027 17.671l168 28C441.342 166.89 448 161.25 448 153.834V38.166c0-7.416-6.658-13.056-13.973-11.837zM144 72c-8.822 0-16-7.178-16-16s7.178-16 16-16 16 7.178 16 16-7.178 16-16 16z"></path></svg>
                        </div>
                        <h3>Bureau of Fire Protection</h3>
                        <a href="tel:4389210">438 9210 </a> <br>
                        <a href="tel:09232495876">09232495876</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- end of emergency -->



<?php
get_footer();