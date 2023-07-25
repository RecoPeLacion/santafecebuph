<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TEMPLATE NAME
 */

 // Municipality Resolutions Post Type
function resolutions_custom_posts() {
	$labels = array(
		'name'                => __( 'Municipality Resolutions' ),
		'singular_name'       => __( 'Municipality Resolutions'),
		'menu_name'           => __( 'Municipality Resolutions'),
		'parent_item_colon'   => __( 'Parent Municipality Resolutions'),
		'all_items'           => __( 'All Municipality Resolutions'),
		'view_item'           => __( 'View Municipality Resolutions'),
		'add_new_item'        => __( 'Add New Latest Municipality Resolutions'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Municipality Resolutions'),
		'update_item'         => __( 'Update Municipality Resolutions'),
		'search_items'        => __( 'Search Municipality Resolutions'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Municipality Resolutions'),
		'description'         => __( 'Best Municipality Resolutions'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon' 		=> 'dashicons-calendar',
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('tag', 'resolutions-category'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite' => array(
			'slug' => 'resolutions',
			'with_front' => true
		)
);
	register_post_type( 'resolutions', $args );
}
add_action( 'init', 'resolutions_custom_posts', 0 );



// Municipality Ordinances Post Type
function ordinances_custom_posts() {
	$labels = array(
		'name'                => __( 'Municipality Ordinances' ),
		'singular_name'       => __( 'Municipality Ordinances'),
		'menu_name'           => __( 'Municipality Ordinances'),
		'parent_item_colon'   => __( 'Parent Municipality Ordinances'),
		'all_items'           => __( 'All Municipality Ordinances'),
		'view_item'           => __( 'View Municipality Ordinances'),
		'add_new_item'        => __( 'Add New Latest VideMunicipality Ordinances'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Municipality Ordinances'),
		'update_item'         => __( 'Update Municipality Ordinances'),
		'search_items'        => __( 'Search Municipality Ordinances'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Municipality Ordinances'),
		'description'         => __( 'Best Municipality Ordinances'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon' 		=> 'dashicons-calendar',
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('tag', 'ordinances-category'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite' => array(
			'slug' => 'ordinances',
			'with_front' => true
		)
);
	register_post_type( 'ordinances', $args );
}
add_action( 'init', 'ordinances_custom_posts', 0 );


// Councilor Post Type
function councilor_custom_posts() {
	$labels = array(
		'name'                => __( 'Councilors' ),
		'singular_name'       => __( 'Councilors'),
		'menu_name'           => __( 'Councilors'),
		'parent_item_colon'   => __( 'Parent Councilors'),
		'all_items'           => __( 'All Councilors'),
		'view_item'           => __( 'View Councilors'),
		'add_new_item'        => __( 'Add New Councilors'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Councilors'),
		'update_item'         => __( 'Update Councilors'),
		'search_items'        => __( 'Search Councilors'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Councilors'),
		'description'         => __( 'Best Councilors'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon' 		=> 'dashicons-groups',
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('tag', 'councilor-category'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite' => array(
			'slug' => 'councilor',
			'with_front' => true
		)
);
	register_post_type( 'councilor', $args );
}
add_action( 'init', 'councilor_custom_posts', 0 );

// Barangay Post Type
function barangay_custom_posts() {
	$labels = array(
		'name'                => __( 'Barangay' ),
		'singular_name'       => __( 'Barangay'),
		'menu_name'           => __( 'Barangay'),
		'parent_item_colon'   => __( 'Parent Barangay'),
		'all_items'           => __( 'All Barangay'),
		'view_item'           => __( 'View Barangay'),
		'add_new_item'        => __( 'Add New Barangay'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Barangay'),
		'update_item'         => __( 'Update Barangay'),
		'search_items'        => __( 'Search Barangay'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Barangay'),
		'description'         => __( 'Best Barangay'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon' 		=> 'dashicons-admin-multisite',
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('tag', 'barangay-category'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite' => array(
			'slug' => 'barangay',
			'with_front' => true
		)
);
	register_post_type( 'barangay', $args );
}
add_action( 'init', 'barangay_custom_posts', 0 );



// Executive Order Post Type
function executive_order_custom_posts() {
	$labels = array(
		'name'                => __( 'Executive Order' ),
		'singular_name'       => __( 'Executive Order'),
		'menu_name'           => __( 'Executive Order'),
		'parent_item_colon'   => __( 'Parent Executive Order'),
		'all_items'           => __( 'All Executive Order'),
		'view_item'           => __( 'View Executive Order'),
		'add_new_item'        => __( 'Add New Executive Order'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Executive Order'),
		'update_item'         => __( 'Update Executive Order'),
		'search_items'        => __( 'Search Executive Order'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Executive Order'),
		'description'         => __( 'Best Executive Order'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_icon' 		=> 'dashicons-networking',
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('tag', 'executive-order-category'),
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite' => array(
			'slug' => 'executive-order',
			'with_front' => true
		)
);
	register_post_type( 'executive-order', $args );
}
add_action( 'init', 'executive_order_custom_posts', 0 );