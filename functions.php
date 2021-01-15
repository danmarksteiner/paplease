<?php

	// //add style and scripts to markup
	function assets() {

		// Stylesheets
		wp_register_style( 'style', get_stylesheet_directory_uri() . '/css/style.min.css', '', date("h:i:s"), false );
		wp_enqueue_style( 'style' );

		// Scripts (in footer)
		wp_register_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.min.js' );
		wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.min.js', '', date("h:i:s"), true );
	}
	add_action('wp_enqueue_scripts', 'assets');

	//register navigation
	register_nav_menus(
		array(
			'header' => __('Header Menu'),
		)
	);

	//remove wp_emoji
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');

	// register custom post types
	require_once( dirname(__FILE__) . '/includes/post-types/register-post-types.php');

	//create metaboxes
	require_once( dirname(__FILE__) . '/includes/metabox/metabox-helpers.php');
	require_once( dirname(__FILE__) . '/includes/metabox/posttype-homepage.php');
	require_once( dirname(__FILE__) . '/includes/metabox/posttype-staff.php');
	require_once( dirname(__FILE__) . '/includes/metabox/posttype-services.php');

	// add_action( 'init', 'create_service_tax' );

	// function create_service_tax() {
	// 	register_taxonomy(
	// 		'services',
	// 		'casestudy',
	// 		array(
	// 			'label' => __( 'Services' ),
	// 			'rewrite' => array( 'slug' => 'services' ),
	// 			'hierarchical' => true,
	// 			'show_ui' => true,
	// 		)
	// 	);
	// }
?>

	