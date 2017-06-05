<?php

// Register Team Post Type
function prospect_now_team() {

	$labels = array(
		'name'                  => 'Team',
		'singular_name'         => 'Member',
		'menu_name'             => 'Team',
		'name_admin_bar'        => 'Team',
		'archives'              => 'Team Archives',
		'attributes'            => 'Team Attributes',
		'parent_item_colon'     => 'Parent Member',
		'all_items'             => 'Team',
		'add_new_item'          => 'Add New Member',
		'add_new'               => 'Add New',
		'new_item'              => 'New Item',
		'edit_item'             => 'Edit Item',
		'update_item'           => 'Update Item',
		'view_item'             => 'View Item',
		'view_items'            => 'View Items',
		'search_items'          => 'Search Item',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Avatar',
		'set_featured_image'    => 'Set Avatar',
		'remove_featured_image' => 'Remove Avatar',
		'use_featured_image'    => 'Use as Avatar',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Items list',
		'items_list_navigation' => 'Items list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$rewrite = array(
		'slug'                  => 'team',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Member',
		'description'           => 'Team for ProspectNow',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'prospect_now_team', $args );

}
add_action( 'init', 'prospect_now_team', 0 );