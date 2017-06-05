<?php
	 
// Register Career Post Type
function prospectnow_career_cpt() {

	$labels = array(
		'name'                  => _x( 'Careers', 'Post Type General Name', 'prospectnow' ),
		'singular_name'         => _x( 'Career', 'Post Type Singular Name', 'prospectnow' ),
		'menu_name'             => __( 'Careers', 'prospectnow' ),
		'name_admin_bar'        => __( 'Career', 'prospectnow' ),
		'archives'              => __( 'Career Archives', 'prospectnow' ),
		'attributes'            => __( 'Career Attributes', 'prospectnow' ),
		'parent_item_colon'     => __( 'Parent Career:', 'prospectnow' ),
		'all_items'             => __( 'All Careers', 'prospectnow' ),
		'add_new_item'          => __( 'Add New Career', 'prospectnow' ),
		'add_new'               => __( 'Add New', 'prospectnow' ),
		'new_item'              => __( 'New Career', 'prospectnow' ),
		'edit_item'             => __( 'Edit Career', 'prospectnow' ),
		'update_item'           => __( 'Update Career', 'prospectnow' ),
		'view_item'             => __( 'View Career', 'prospectnow' ),
		'view_items'            => __( 'View Careers', 'prospectnow' ),
		'search_items'          => __( 'Search Careers', 'prospectnow' ),
		'not_found'             => __( 'Not found', 'prospectnow' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'prospectnow' ),
		'featured_image'        => __( 'Featured Image', 'prospectnow' ),
		'set_featured_image'    => __( 'Set featured image', 'prospectnow' ),
		'remove_featured_image' => __( 'Remove featured image', 'prospectnow' ),
		'use_featured_image'    => __( 'Use as featured image', 'prospectnow' ),
		'insert_into_item'      => __( 'Insert into Career', 'prospectnow' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Career', 'prospectnow' ),
		'items_list'            => __( 'Career list', 'prospectnow' ),
		'items_list_navigation' => __( 'Career list navigation', 'prospectnow' ),
		'filter_items_list'     => __( 'Filter Career list', 'prospectnow' ),
	);
	$args = array(
		'label'                 => __( 'Career', 'prospectnow' ),
		'description'           => __( 'Career description', 'prospectnow' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', ),
		'taxonomies'            => array(  ),
		'hierarchical'          => true,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 23,
		'menu_icon'				=> 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'career', $args );

}
add_action( 'init', 'prospectnow_career_cpt', 0 );