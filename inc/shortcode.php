<?php
/**
 * The template for displaying shortcode
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TEMPLATE NAME
 */

 //Ordinances Shortcode
function ordinances_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'posts_per_page' => -1,
    ), $atts, 'ordinances' );
     
     $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
 
    $args = array(
        'post_type'      => 'ordinances',
        'posts_per_page' => -1,
        // 'posts_per_page' => intval( $atts['posts_per_page'] ),
        'paged'          => $paged,
    );
    if ( is_front_page() ) {
         $query = new WP_Query( $args );
         ob_start();
         if ( $query->have_posts() ) {
                 while ( $query->have_posts() ) {
                     $query->the_post();
                     // Display post content or desired output
                     ?>
                         <div class="card_list">
                             <div class="card_list_container">
                                 <div class="card_list_left">
                                     <div class="card_list_wrapper">
                                         <div class="card_list_img">
                                             <?php if(has_post_thumbnail()): ?>
                                             <?php
                                                 $thumb_id = get_post_thumbnail_id(get_the_ID());
                                                 $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                             ?>
                                             <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                             <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/prof.png" alt="">
                                             <?php endif; ?>
                                         </div>
                                         <div class="card_list_content">
                                             <h3>Hon. <?php the_field('author'); ?></h3>
                                             <p><?php the_title(); ?></p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card_list_right">
                                     <div class="card_list_button">
                                         <a href="<?php the_field('pdf_link'); ?>" target="_blank">View Ordinances</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
 
                     <?php
             }
         }
         wp_reset_postdata();
         return ob_get_clean();
     } else {
 
         $query = new WP_Query( $args );
         ob_start();
         if ( $query->have_posts() ) {
 
             ?>
 
                 <table class="card_table" id="ordTable">
 
                     <thead>
                         <tr>
                             <th>Author</th>
                             <th>Resolution Number</th>
                             <th>Title</th>
                             <th>Committee In-Charge</th>
                             <th>Date Approve</th>
                             <th></th>
                         </tr>    
                     </thead>
                     <tbody>
 
             <?php
 
                     while ( $query->have_posts() ) {
                         $query->the_post();
                         // Display post content or desired output
                         ?>
                             <tr>
                                 <td>
                                     <div class="card_list_inner_img_wrap">
                                         <div class="card_list_inner_img">
                                             <?php if(has_post_thumbnail()): ?>
                                             <?php
                                                 $thumb_id = get_post_thumbnail_id(get_the_ID());
                                                 $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                             ?>
                                             <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                             <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/prof.png" alt="">
                                             <?php endif; ?>
                                         </div>
                                         <h3>Hon. <?php the_field('author'); ?></h3>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_inner_number">
                                         <span><?php the_field('resolution_number'); ?></span>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_inner_title">
                                         <span><?php the_title(); ?></span>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_inner_incharge">
                                         <span><?php the_field('committee_in_charge'); ?></span>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_inner_date">
                                         <span><?php the_field('date_approved'); ?></span>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_innner_button">
                                         <a href="<?php the_field('pdf_link'); ?>" download>
                                             <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                                         </a>
                                         <a href="<?php the_field('pdf_link'); ?>" target="_blank">
                                             <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                         </a>
                                     </div>
                                 </td>
                             </tr>
                             
                         <?php
                     }
 
             ?>
                 </tbody>
                 </table>
 
                 <div class="card_pagination">
                     <?php 
                         echo paginate_links( array(
                             'total'   => $query->max_num_pages,
                             'current' => $paged,
                             'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>'),
                             'next_text' => __('<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>'),
                         ) );
                     ?> 
                 </div>
             
             <?php
         }
         wp_reset_postdata();
         return ob_get_clean();
     }
 }
 add_shortcode( 'ordinances', 'ordinances_shortcode' );

 //Shortcode for Resolutions
function resolutions_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'posts_per_page' => -1,
    ), $atts, 'resolutions' );
     
     $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
 
    $args = array(
        'post_type'      => 'resolutions',
        'posts_per_page' => -1,
        // 'posts_per_page' => intval( $atts['posts_per_page'] ),
        'paged'          => $paged,
    );
    if ( is_front_page() ) {
         $query = new WP_Query( $args );
         ob_start();
         if ( $query->have_posts() ) {
                 while ( $query->have_posts() ) {
                     $query->the_post();
                     // Display post content or desired output
                     ?>
                         <div class="card_list">
                             <div class="card_list_container">
                                 <div class="card_list_left">
                                     <div class="card_list_wrapper">
                                         <div class="card_list_img">
                                             <?php if(has_post_thumbnail()): ?>
                                             <?php
                                                 $thumb_id = get_post_thumbnail_id(get_the_ID());
                                                 $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                             ?>
                                             <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                             <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/prof.png" alt="">
                                             <?php endif; ?>
                                         </div>
                                         <div class="card_list_content">
                                             <h3>Hon. <?php the_field('author'); ?></h3>
                                             <p><?php the_title(); ?></p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="card_list_right">
                                     <div class="card_list_button">
                                         <a href="<?php the_field('pdf_link'); ?>" target="_blank">View Resolutions</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
 
                     <?php
             }
         }
         wp_reset_postdata();
         return ob_get_clean();
     } else {
 
         $query = new WP_Query( $args );
         ob_start();
         if ( $query->have_posts() ) {
 
             ?>
 
                 <table class="card_table" id="resoTable">
 
                     <thead>
                         <tr>
                             <th>Author</th>
                             <th>Resolution Number</th>
                             <th>Title</th>
                             <th>Committee In-Charge</th>
                             <th>Date Approve</th>
                             <th></th>
                         </tr>    
                     </thead>
                     <tbody>
 
             <?php
 
                     while ( $query->have_posts() ) {
                         $query->the_post();
                         // Display post content or desired output
                         ?>
                             <tr>
                                 <td>
                                     <div class="card_list_inner_img_wrap">
                                         <div class="card_list_inner_img">
                                             <?php if(has_post_thumbnail()): ?>
                                             <?php
                                                 $thumb_id = get_post_thumbnail_id(get_the_ID());
                                                 $alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
                                             ?>
                                             <img title="<?php the_title(); ?>" alt="<?php echo $alt; ?>" class="wp-post-image is-wide" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>">
                                             <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri()?>/assets/img/prof.png" alt="">
                                             <?php endif; ?>
                                         </div>
                                         <h3>Hon. <?php the_field('author'); ?></h3>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_inner_number">
                                         <span><?php the_field('resolution_number'); ?></span>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_inner_title">
                                         <span><?php the_title(); ?></span>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_inner_incharge">
                                         <span><?php the_field('committee_in_charge'); ?></span>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_inner_date">
                                         <span><?php the_field('date_approved'); ?></span>
                                     </div>
                                 </td>
                                 <td>
                                     <div class="card_list_innner_button">
                                         <a href="<?php the_field('pdf_link'); ?>" download>
                                             <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
                                         </a>
                                         <a href="<?php the_field('pdf_link'); ?>" target="_blank">
                                             <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                         </a>
                                     </div>
                                 </td>
                             </tr>
                             
                         <?php
                     }
 
             ?>
                 </tbody>
                 </table>
 
                 <!-- <div class="card_pagination">
                     <?php 
                         echo paginate_links( array(
                             'total'   => $query->max_num_pages,
                             'current' => $paged,
                             'prev_text' => __('<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>'),
                             'next_text' => __('<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg>'),
                         ) );
                     ?> 
                 </div> -->
             
             <?php
         }
         wp_reset_postdata();
         return ob_get_clean();
     }
 }
 add_shortcode( 'resolutions', 'resolutions_shortcode' );