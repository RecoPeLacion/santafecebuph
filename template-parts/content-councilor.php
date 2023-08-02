<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TEMPLATENAME
 */

?>

<section class="sf_single--councilor-wrapper sf_padding_section">
    <div class="cntr">
        <div class="sf_single--councilor-card">
            <div class="sf_single--councilor-row">
                <div class="sf_single--councilor-col-03">
                    <div class="sf_single--councilor-img">
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
                <div class="sf_single--councilor-col-07">
                    <div class="sf_single--councilor-content">
                        <div class="sf_single--councilor-title">
                            <h1>Hon. <?php the_title(); ?></h1>
                        </div>
                        <div class="sf_single--councilor-desc">
                            <ul class="sf_single--councilor-desc-list">
                                <li>
                                    <small>Office Room No.</small>
                                    <?php the_field('office_room_number'); ?>
                                </li>
                                <li>
                                    <small>Office Tel. No.</small>
                                    <?php the_field('office_tel_number'); ?>
                                </li>
                                <li>
                                    <small>Office Email Address</small>
                                    <?php the_field('office_email_address'); ?>
                                </li>
                                <li>
                                    <small>Facebook Page</small>
                                    <a href="<?php the_field('facebook_page_link'); ?>" target="_blank"><?php the_field('facebook_page'); ?></a>
                                </li>
                                <li>
                                    <small>Headquarters Address</small>
                                    <?php the_field('headquarters_office'); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="sf_single--councilor-title">
                            <h3>Attendance</h3>
                        </div>
                        <p>12th City Council Session for 2022 - 2025</p>
                        <ul class="sf_single--councilor-attendance">
                            <li>
                                <div class="sf_single--councilor-attendance-card">
                                    <span>Total Sessions</span>
                                    <h3><?php the_field('total_sessions'); ?></h3>
                                </div>
                            </li>
                            <li>
                                <div class="sf_single--councilor-attendance-card">
                                    <span>Sessions Left</span>
                                    <h3><?php the_field('sessions_left'); ?></h3>
                                </div>
                            </li>
                            <li>
                                <div class="sf_single--councilor-attendance-card">
                                    <span>Present Days</span>
                                    <h3><?php the_field('present_days'); ?></h3>
                                </div>
                            </li>
                            <li>
                                <div class="sf_single--councilor-attendance-card">
                                    <span>Absent Days</span>
                                    <h3><?php the_field('absent_days'); ?></h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
