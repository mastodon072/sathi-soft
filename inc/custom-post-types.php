<?php 
// Register Custom Post Type
function sathi_staffs() {

	$labels = array(
		'name'                  => _x( 'Staffs', 'Post Type General Name', 'sathisoft' ),
		'singular_name'         => _x( 'Staff', 'Post Type Singular Name', 'sathisoft' ),
		'menu_name'             => __( 'Staffs', 'sathisoft' ),
		'name_admin_bar'        => __( 'Staff', 'sathisoft' ),
		'archives'              => __( 'Staff Archives', 'sathisoft' ),
		'attributes'            => __( 'Staff Attributes', 'sathisoft' ),
		'parent_item_colon'     => __( 'Parent Staff:', 'sathisoft' ),
		'all_items'             => __( 'All Staffs', 'sathisoft' ),
		'add_new_item'          => __( 'Add New Staff', 'sathisoft' ),
		'add_new'               => __( 'Add New Staff', 'sathisoft' ),
		'new_item'              => __( 'New Staff', 'sathisoft' ),
		'edit_item'             => __( 'Edit Staff', 'sathisoft' ),
		'update_item'           => __( 'Update Staff', 'sathisoft' ),
		'view_item'             => __( 'View Staff', 'sathisoft' ),
		'view_items'            => __( 'View Staffs', 'sathisoft' ),
		'search_items'          => __( 'Search Staff', 'sathisoft' ),
		'not_found'             => __( 'Staff Not found', 'sathisoft' ),
		'not_found_in_trash'    => __( 'Staff Not found in Trash', 'sathisoft' ),
		'featured_image'        => __( 'Profile Picture', 'sathisoft' ),
		'set_featured_image'    => __( 'Set Profile Picture', 'sathisoft' ),
		'remove_featured_image' => __( 'Remove Profile Picture', 'sathisoft' ),
		'use_featured_image'    => __( 'Use as Profile Picture', 'sathisoft' ),
		'insert_into_item'      => __( 'Insert into Staff', 'sathisoft' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Staff', 'sathisoft' ),
		'items_list'            => __( 'Staffs list', 'sathisoft' ),
		'items_list_navigation' => __( 'Staffs list navigation', 'sathisoft' ),
		'filter_items_list'     => __( 'Filter Staffs list', 'sathisoft' ),
	);
	$args = array(
		'label'                 => __( 'Staff', 'sathisoft' ),
		'description'           => __( '', 'sathisoft' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'sathi_staff', $args );

}
add_action( 'init', 'sathi_staffs', 0 );


// Register Custom Post Type
function sathi_faqs() {

	$labels = array(
		'name'                  => _x( 'FAQs', 'Post Type General Name', 'sathisoft' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'sathisoft' ),
		'menu_name'             => __( 'FAQs', 'sathisoft' ),
		'name_admin_bar'        => __( 'FAQ', 'sathisoft' ),
		'archives'              => __( 'FAQ Archives', 'sathisoft' ),
		'attributes'            => __( 'FAQ Attributes', 'sathisoft' ),
		'parent_item_colon'     => __( 'Parent FAQ:', 'sathisoft' ),
		'all_items'             => __( 'All FAQs', 'sathisoft' ),
		'add_new_item'          => __( 'Add New FAQ', 'sathisoft' ),
		'add_new'               => __( 'Add New FAQ', 'sathisoft' ),
		'new_item'              => __( 'New FAQ', 'sathisoft' ),
		'edit_item'             => __( 'Edit FAQ', 'sathisoft' ),
		'update_item'           => __( 'Update FAQ', 'sathisoft' ),
		'view_item'             => __( 'View FAQ', 'sathisoft' ),
		'view_items'            => __( 'View FAQs', 'sathisoft' ),
		'search_items'          => __( 'Search FAQ', 'sathisoft' ),
		'not_found'             => __( 'FAQ Not found', 'sathisoft' ),
		'not_found_in_trash'    => __( 'FAQ Not found in Trash', 'sathisoft' ),
		'featured_image'        => __( 'Profile Picture', 'sathisoft' ),
		'set_featured_image'    => __( 'Set Profile Picture', 'sathisoft' ),
		'remove_featured_image' => __( 'Remove Profile Picture', 'sathisoft' ),
		'use_featured_image'    => __( 'Use as Profile Picture', 'sathisoft' ),
		'insert_into_item'      => __( 'Insert into FAQ', 'sathisoft' ),
		'uploaded_to_this_item' => __( 'Uploaded to this FAQ', 'sathisoft' ),
		'items_list'            => __( 'FAQs list', 'sathisoft' ),
		'items_list_navigation' => __( 'FAQs list navigation', 'sathisoft' ),
		'filter_items_list'     => __( 'Filter FAQs list', 'sathisoft' ),
	);
	$args = array(
		'label'                 => __( 'FAQ', 'sathisoft' ),
		'description'           => __( '', 'sathisoft' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array(  'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-format-chat',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'sathi_faq', $args );

}
add_action( 'init', 'sathi_faqs', 0 );



// Register Custom Post Type
function sathi_galleries() {

	$labels = array(
		'name'                  => _x( 'Galleries', 'Post Type General Name', 'sathisoft' ),
		'singular_name'         => _x( 'gallery', 'Post Type Singular Name', 'sathisoft' ),
		'menu_name'             => __( 'Galleries', 'sathisoft' ),
		'name_admin_bar'        => __( 'gallery', 'sathisoft' ),
		'archives'              => __( 'gallery Archives', 'sathisoft' ),
		'attributes'            => __( 'gallery Attributes', 'sathisoft' ),
		'parent_item_colon'     => __( 'Parent gallery:', 'sathisoft' ),
		'all_items'             => __( 'All Galleries', 'sathisoft' ),
		'add_new_item'          => __( 'Add New gallery', 'sathisoft' ),
		'add_new'               => __( 'Add New gallery', 'sathisoft' ),
		'new_item'              => __( 'New gallery', 'sathisoft' ),
		'edit_item'             => __( 'Edit gallery', 'sathisoft' ),
		'update_item'           => __( 'Update gallery', 'sathisoft' ),
		'view_item'             => __( 'View gallery', 'sathisoft' ),
		'view_items'            => __( 'View Galleries', 'sathisoft' ),
		'search_items'          => __( 'Search gallery', 'sathisoft' ),
		'not_found'             => __( 'gallery Not found', 'sathisoft' ),
		'not_found_in_trash'    => __( 'gallery Not found in Trash', 'sathisoft' ),
		'featured_image'        => __( 'Profile Picture', 'sathisoft' ),
		'set_featured_image'    => __( 'Set Profile Picture', 'sathisoft' ),
		'remove_featured_image' => __( 'Remove Profile Picture', 'sathisoft' ),
		'use_featured_image'    => __( 'Use as Profile Picture', 'sathisoft' ),
		'insert_into_item'      => __( 'Insert into gallery', 'sathisoft' ),
		'uploaded_to_this_item' => __( 'Uploaded to this gallery', 'sathisoft' ),
		'items_list'            => __( 'Galleries list', 'sathisoft' ),
		'items_list_navigation' => __( 'Galleries list navigation', 'sathisoft' ),
		'filter_items_list'     => __( 'Filter Galleries list', 'sathisoft' ),
	);
	$args = array(
		'label'                 => __( 'gallery', 'sathisoft' ),
		'description'           => __( '', 'sathisoft' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'sathi_gallery', $args );

}
add_action( 'init', 'sathi_galleries', 0 );



/*testimonials*/
function sathi_testimonials() {

	$labels = array(
		'name'                  => _x( 'testimonials', 'Post Type General Name', 'sathisoft' ),
		'singular_name'         => _x( 'testimonial', 'Post Type Singular Name', 'sathisoft' ),
		'menu_name'             => __( 'testimonials', 'sathisoft' ),
		'name_admin_bar'        => __( 'testimonial', 'sathisoft' ),
		'archives'              => __( 'testimonial Archives', 'sathisoft' ),
		'attributes'            => __( 'testimonial Attributes', 'sathisoft' ),
		'parent_item_colon'     => __( 'Parent testimonial:', 'sathisoft' ),
		'all_items'             => __( 'All testimonials', 'sathisoft' ),
		'add_new_item'          => __( 'Add New testimonial', 'sathisoft' ),
		'add_new'               => __( 'Add New testimonial', 'sathisoft' ),
		'new_item'              => __( 'New testimonial', 'sathisoft' ),
		'edit_item'             => __( 'Edit testimonial', 'sathisoft' ),
		'update_item'           => __( 'Update testimonial', 'sathisoft' ),
		'view_item'             => __( 'View testimonial', 'sathisoft' ),
		'view_items'            => __( 'View testimonials', 'sathisoft' ),
		'search_items'          => __( 'Search testimonial', 'sathisoft' ),
		'not_found'             => __( 'testimonial Not found', 'sathisoft' ),
		'not_found_in_trash'    => __( 'testimonial Not found in Trash', 'sathisoft' ),
		'featured_image'        => __( 'Profile Picture', 'sathisoft' ),
		'set_featured_image'    => __( 'Set Profile Picture', 'sathisoft' ),
		'remove_featured_image' => __( 'Remove Profile Picture', 'sathisoft' ),
		'use_featured_image'    => __( 'Use as Profile Picture', 'sathisoft' ),
		'insert_into_item'      => __( 'Insert into testimonial', 'sathisoft' ),
		'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'sathisoft' ),
		'items_list'            => __( 'testimonials list', 'sathisoft' ),
		'items_list_navigation' => __( 'testimonials list navigation', 'sathisoft' ),
		'filter_items_list'     => __( 'Filter testimonials list', 'sathisoft' ),
	);
	$args = array(
		'label'                 => __( 'testimonial', 'sathisoft' ),
		'description'           => __( '', 'sathisoft' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'           => 'dashicons-testimonial',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'sathi_testimonial', $args );

}
add_action( 'init', 'sathi_testimonials', 0 );







