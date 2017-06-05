<?php
 
// Register FAQ Post Type
function prospectnow_faq_cpt() {

	$labels = array(
		'name'                  => _x( 'FAQs', 'Post Type General Name', 'prospectnow' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'prospectnow' ),
		'menu_name'             => __( 'FAQs', 'prospectnow' ),
		'name_admin_bar'        => __( 'FAQ', 'prospectnow' ),
		'archives'              => __( 'FAQ Archives', 'prospectnow' ),
		'attributes'            => __( 'FAQ Attributes', 'prospectnow' ),
		'parent_item_colon'     => __( 'Parent FAQ:', 'prospectnow' ),
		'all_items'             => __( 'All FAQs', 'prospectnow' ),
		'add_new_item'          => __( 'Add New FAQ', 'prospectnow' ),
		'add_new'               => __( 'Add New', 'prospectnow' ),
		'new_item'              => __( 'New FAQ', 'prospectnow' ),
		'edit_item'             => __( 'Edit FAQ', 'prospectnow' ),
		'update_item'           => __( 'Update FAQ', 'prospectnow' ),
		'view_item'             => __( 'View FAQ', 'prospectnow' ),
		'view_items'            => __( 'View FAQs', 'prospectnow' ),
		'search_items'          => __( 'Search FAQs', 'prospectnow' ),
		'not_found'             => __( 'Not found', 'prospectnow' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'prospectnow' ),
		'featured_image'        => __( 'Featured Image', 'prospectnow' ),
		'set_featured_image'    => __( 'Set featured image', 'prospectnow' ),
		'remove_featured_image' => __( 'Remove featured image', 'prospectnow' ),
		'use_featured_image'    => __( 'Use as featured image', 'prospectnow' ),
		'insert_into_item'      => __( 'Insert into FAQ', 'prospectnow' ),
		'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'prospectnow' ),
		'items_list'            => __( 'FAQs list', 'prospectnow' ),
		'items_list_navigation' => __( 'FAQs list navigation', 'prospectnow' ),
		'filter_items_list'     => __( 'Filter FAQs list', 'prospectnow' ),
	);
	$args = array(
		'label'                 => __( 'FAQ', 'prospectnow' ),
		'description'           => __( 'FAQs description', 'prospectnow' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', ),
		'taxonomies'            => array(  ),
		'hierarchical'          => true,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 22,
		'menu_icon'				=> 'dashicons-format-chat',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'prospectnow_faq_cpt', 0 );