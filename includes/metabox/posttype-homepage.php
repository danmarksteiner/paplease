<?php

//remove default wysiwyg editor
add_action('init', function() {
    $post_type = 'page';
    remove_post_type_support( $post_type, 'editor');
}, 100);

// Initialise CMB2
add_action( 'cmb2_init', function() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => '_metabox_homepage_intro',
		'title'         => __( 'Intro', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'      => array( 
			'key' => 'page-template',
			'value' => 'template-home.php'
		),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$cmb->add_field( array(
		'name'       => __( 'Homepage Intro Heading', 'cmb2' ),
		'desc'       => __( 'The heading line of the introduction section', 'cmb2' ),
		'id'         => '_homepage_intro_heading',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );
} );

// Initialise CMB2
add_action( 'cmb2_init', function() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => '_metabox_homepage_mission',
		'title'         => __( 'Mission', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'      => array( 
			'key' => 'page-template',
			'value' => 'template-home.php'
		),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$cmb->add_field( array(
		'name'       => __( 'Homepage Mission Heading', 'cmb2' ),
		'desc'       => __( 'The heading line of the Mission section', 'cmb2' ),
		'id'         => '_homepage_mission_heading',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

	$cmb->add_field( array(
		'name'       => __( 'Homepage Mission Body', 'cmb2' ),
		'desc'       => __( 'The body copy of the Mission section', 'cmb2' ),
		'id'         => '_homepage_mission_body',
		'type'       => 'wysiwyg',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

} );

// Initialise CMB2
add_action( 'cmb2_init', function() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => '_metabox_homepage_discretion',
		'title'         => __( 'Discretion', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'      => array( 
			'key' => 'page-template',
			'value' => 'template-home.php'
		),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$cmb->add_field( array(
		'name'       => __( 'Homepage Discretion Heading', 'cmb2' ),
		'desc'       => __( 'The heading line of the discretion section', 'cmb2' ),
		'id'         => '_homepage_discretion_heading',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

	$cmb->add_field( array(
		'name'       => __( 'Homepage Discretion Body', 'cmb2' ),
		'desc'       => __( 'The body copy of the discretion section', 'cmb2' ),
		'id'         => '_homepage_discretion_body',
		'type'       => 'wysiwyg',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

} );

// Initialise CMB2
add_action( 'cmb2_init', function() {

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => '_metabox_homepage_who_we_are',
		'title'         => __( 'Who We Are', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'      => array( 
			'key' => 'page-template',
			'value' => 'template-home.php'
		),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	$cmb->add_field( array(
		'name'       => __( 'Who We Are Heading', 'cmb2' ),
		'desc'       => __( 'The heading line of the who we are section', 'cmb2' ),
		'id'         => '_homepage_who_we_are_heading',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

	$cmb->add_field( array(
		'name'       => __( 'Who We Are Subheading', 'cmb2' ),
		'desc'       => __( 'The subheading line of the who we are section', 'cmb2' ),
		'id'         => '_homepage_who_we_are_subheading',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

	$cmb->add_field( array(
		'name'       => __( 'Homepage Who We Are Body', 'cmb2' ),
		'desc'       => __( 'The body copy of the who we are section', 'cmb2' ),
		'id'         => '_homepage_who_we_are_body',
		'type'       => 'wysiwyg',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

} );

?>