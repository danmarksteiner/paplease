<?php
	
	// // -------------------------
	// // Case Study -----------------
	// // -------------------------

	// add_action( 'init', function() {

	// 	$labels = array(
	// 		'name'               => _x( 'Case Studies', 'post type general name', 'your-plugin-textdomain' ),
	// 		'singular_name'      => _x( 'Case Study', 'post type singular name', 'your-plugin-textdomain' ),
	// 		'menu_name'          => _x( 'Case Studies', 'admin menu', 'your-plugin-textdomain' ),
	// 		'name_admin_bar'     => _x( 'name_admin_bar', 'add new on admin bar', 'your-plugin-textdomain' ),
	// 		'add_new'            => _x( 'Add New Case Study', 'book', 'your-plugin-textdomain' ),
	// 		'add_new_item'       => __( 'Add New Case Study', 'your-plugin-textdomain' ),
	// 		'new_item'           => __( 'New', 'your-plugin-textdomain' ),
	// 		'edit_item'          => __( 'Edit', 'your-plugin-textdomain' ),
	// 		'view_item'          => __( 'View', 'your-plugin-textdomain' ),
	// 		'all_items'          => __( 'All', 'your-plugin-textdomain' ),
	// 		'search_items'       => __( 'Search', 'your-plugin-textdomain' ),
	// 		'parent_item_colon'  => __( 'Parent:', 'your-plugin-textdomain' ),
	// 		'not_found'          => __( 'Nothing found.', 'your-plugin-textdomain' ),
	// 		'not_found_in_trash' => __( 'Nothing found in Trash.', 'your-plugin-textdomain' )
	// 	);

	// 	$args = array(
	// 		'labels'				=> $labels,
	//         'description'			=> __( 'Description.', 'your-plugin-textdomain' ),
	// 		'public'				=> true,
	// 		'publicly_queryable'	=> true,
	// 		'show_ui'				=> true,
	// 		'show_in_menu'			=> true,
	// 		'query_var'				=> true,
	// 		'rewrite'				=> array( 'slug' => 'case_studies' ),
	// 		'capability_type'		=> 'post',
	// 		'has_archive'			=> true,
	// 		'hierarchical'			=> true,
	// 		'menu_position'			=> null,
	// 		'supports'          	=> array( 'title', 'page-attributes' ),
	// 	);

	// 	register_post_type( 'casestudy', $args );
	// 	// flush_rewrite_rules();

	// } );

	// 	// -------------------------
	// // Client -----------------
	// // -------------------------

	// add_action( 'init', function() {

	// 	$labels = array(
	// 		'name'               => _x( 'Client', 'post type general name', 'your-plugin-textdomain' ),
	// 		'singular_name'      => _x( 'Client', 'post type singular name', 'your-plugin-textdomain' ),
	// 		'menu_name'          => _x( 'Clients', 'admin menu', 'your-plugin-textdomain' ),
	// 		'name_admin_bar'     => _x( 'name_admin_bar', 'add new on admin bar', 'your-plugin-textdomain' ),
	// 		'add_new'            => _x( 'Add New Client', 'book', 'your-plugin-textdomain' ),
	// 		'add_new_item'       => __( 'Add New Client', 'your-plugin-textdomain' ),
	// 		'new_item'           => __( 'New', 'your-plugin-textdomain' ),
	// 		'edit_item'          => __( 'Edit', 'your-plugin-textdomain' ),
	// 		'view_item'          => __( 'View', 'your-plugin-textdomain' ),
	// 		'all_items'          => __( 'All', 'your-plugin-textdomain' ),
	// 		'search_items'       => __( 'Search', 'your-plugin-textdomain' ),
	// 		'parent_item_colon'  => __( 'Parent:', 'your-plugin-textdomain' ),
	// 		'not_found'          => __( 'Nothing found.', 'your-plugin-textdomain' ),
	// 		'not_found_in_trash' => __( 'Nothing found in Trash.', 'your-plugin-textdomain' )
	// 	);

	// 	$args = array(
	// 		'labels'				=> $labels,
	//         'description'			=> __( 'Description.', 'your-plugin-textdomain' ),
	// 		'public'				=> true,
	// 		'publicly_queryable'	=> true,
	// 		'show_ui'				=> true,
	// 		'show_in_menu'			=> true,
	// 		'query_var'				=> true,
	// 		'rewrite'				=> array( 'slug' => 'client' ),
	// 		'capability_type'		=> 'post',
	// 		'has_archive'			=> true,
	// 		'hierarchical'			=> true,
	// 		'menu_position'			=> null,
	// 		'supports'          	=> array( 'title', 'page-attributes' ),
	// 	);

	// 	register_post_type( 'client', $args );
	// 	// flush_rewrite_rules();

	// } );

	// -------------------------
	// Staff -----------------
	// -------------------------

	add_action( 'init', function() {

		$labels = array(
			'name'               => _x( 'Staff', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Staff', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Staff Members', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'name_admin_bar', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New Staff Member', 'book', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Staff Member', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'Nothing found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'Nothing found in Trash.', 'your-plugin-textdomain' )
		);

		$args = array(
			'labels'				=> $labels,
	        'description'			=> __( 'Description.', 'your-plugin-textdomain' ),
			'public'				=> true,
			'publicly_queryable'	=> true,
			'show_ui'				=> true,
			'show_in_menu'			=> true,
			'query_var'				=> true,
			'rewrite'				=> array( 'slug' => 'staff' ),
			'capability_type'		=> 'post',
			'has_archive'			=> true,
			'hierarchical'			=> true,
			'menu_position'			=> null,
			'supports'          	=> array( 'title', 'page-attributes' ),
		);

		register_post_type( 'staff', $args );
		flush_rewrite_rules();

	} );

	// -------------------------
	// Services -----------------
	// -------------------------

	add_action( 'init', function() {

		$labels = array(
			'name'               => _x( 'Service', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Service', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Services', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'name_admin_bar', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New Service', 'book', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Service', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'Nothing found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'Nothing found in Trash.', 'your-plugin-textdomain' )
		);

		$args = array(
			'labels'				=> $labels,
	        'description'			=> __( 'Description.', 'your-plugin-textdomain' ),
			'public'				=> true,
			'publicly_queryable'	=> true,
			'show_ui'				=> true,
			'show_in_menu'			=> true,
			'query_var'				=> true,
			'rewrite'				=> array( 'slug' => 'service' ),
			'capability_type'		=> 'post',
			'has_archive'			=> true,
			'hierarchical'			=> true,
			'menu_position'			=> null,
			'supports'          	=> array( 'title', 'page-attributes' ),
		);

		register_post_type( 'service', $args );
		flush_rewrite_rules();

	} );

	// 	// -------------------------
	// // Events -----------------
	// // -------------------------

	// add_action( 'init', function() {

	// 	$labels = array(
	// 		'name'               => _x( 'Events', 'post type general name', 'your-plugin-textdomain' ),
	// 		'singular_name'      => _x( 'Event', 'post type singular name', 'your-plugin-textdomain' ),
	// 		'menu_name'          => _x( 'Events', 'admin menu', 'your-plugin-textdomain' ),
	// 		'name_admin_bar'     => _x( 'name_admin_bar', 'add new on admin bar', 'your-plugin-textdomain' ),
	// 		'add_new'            => _x( 'Add New Event', 'book', 'your-plugin-textdomain' ),
	// 		'add_new_item'       => __( 'Add New Event', 'your-plugin-textdomain' ),
	// 		'new_item'           => __( 'New', 'your-plugin-textdomain' ),
	// 		'edit_item'          => __( 'Edit', 'your-plugin-textdomain' ),
	// 		'view_item'          => __( 'View', 'your-plugin-textdomain' ),
	// 		'all_items'          => __( 'All', 'your-plugin-textdomain' ),
	// 		'search_items'       => __( 'Search', 'your-plugin-textdomain' ),
	// 		'parent_item_colon'  => __( 'Parent:', 'your-plugin-textdomain' ),
	// 		'not_found'          => __( 'Nothing found.', 'your-plugin-textdomain' ),
	// 		'not_found_in_trash' => __( 'Nothing found in Trash.', 'your-plugin-textdomain' )
	// 	);

	// 	$args = array(
	// 		'labels'				=> $labels,
	//         'description'			=> __( 'Description.', 'your-plugin-textdomain' ),
	// 		'public'				=> true,
	// 		'publicly_queryable'	=> true,
	// 		'show_ui'				=> true,
	// 		'show_in_menu'			=> true,
	// 		'query_var'				=> true,
	// 		'rewrite'				=> array( 'slug' => 'event' ),
	// 		'capability_type'		=> 'post',
	// 		'has_archive'			=> true,
	// 		'hierarchical'			=> true,
	// 		'menu_position'			=> null,
	// 		'supports'          	=> array( 'title', 'page-attributes' ),
	// 	);

	// 	register_post_type( 'event', $args );
	// 	// flush_rewrite_rules();

	// } );

?>