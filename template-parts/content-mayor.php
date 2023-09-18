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
                    <h4>Brief Bio:</h4>
                    <?php the_field('brief_bio'); ?>
                </div>
                <div class="sf_single--councilor-col-07">
                    <div class="sf_single--councilor-content">
                        <div class="sf_single--councilor-title">
                            <h1>Mayor <?php the_title(); ?></h1>
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
                                <li>
                                    <small>Education</small>
                                    <?php the_field('education'); ?>
                                </li>
                                <li>
                                    <small>Work Experience</small>
                                    <?php the_field('work_experience'); ?>
                                </li>
                                <li>
                                    <small>Ordinances Authored</small>
                                    <?php the_field('ordinances_authored'); ?>
                                </li>
                                <li>
                                    <small>Resolutions Authored</small>
                                    <?php the_field('resolutions_authored'); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="sf_single--councilor-title">
                            <h3>Attendance</h3>
                        </div>
                        <ul class="sf_single--councilor-attendance">
                            <li>
                                <div class="sf_single--councilor-attendance-card">
                                    <span>Public Hearing</span>
                                    <h3><?php the_field('public_hearing'); ?></h3>
                                </div>
                            </li>
                            <li>
                                <div class="sf_single--councilor-attendance-card">
                                    <span>Session Present</span>
                                    <h3><?php the_field('session_present'); ?></h3>
                                </div>
                            </li>
                            <li>
                                <div class="sf_single--councilor-attendance-card">
                                    <span>Session Absent</span>
                                    <h3><?php the_field('session_absent'); ?></h3>
                                </div>
                            </li>
                            <li>
                                <div class="sf_single--councilor-attendance-card">
                                    <span>Session in 3 Years</span>
                                    <h3><?php the_field('session_in_3_years'); ?></h3>
                                </div>
                            </li>
                            <li>
                                <div class="sf_single--councilor-attendance-card">
                                    <span>Remaining Session</span>
                                    <h3><?php the_field('remaining_session'); ?></h3>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
