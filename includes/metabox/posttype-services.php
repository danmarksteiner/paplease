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
		'id'            => '_metabox_service',
		'title'         => __( 'Services', 'cmb2' ),
		'object_types'  => array( 'service', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Case Study Name
	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Service Title', 'cmb2' ),
		'desc'       => __( 'The title of the service', 'cmb2' ),
		'id'         => '_service_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

	$cmb->add_field( array(
		'name'    => 'Service Image Mobile',
		'desc'    => 'The service image on mobile',
		'id'      => '_service_image_mobile',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
		),
		'preview_size' => 'thumbnail', // Image size to use when previewing in the admin.
	) );

	$cmb->add_field( array(
		'name'    => 'Service Image Desktop',
		'desc'    => 'The service image on desktop',
		'id'      => '_service_image_desktop',
		'type'    => 'file',
		// Optional:
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Image' // Change upload button text. Default: "Add or Upload File"
		),
		'preview_size' => 'thumbnail', // Image size to use when previewing in the admin.
	) );

	$cmb->add_field( array(
		'name'       => __( 'Service text', 'cmb2' ),
		'desc'       => __( 'The text of the service', 'cmb2' ),
		'id'         => '_service_text',
		'type'       => 'wysiwyg',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

} );





?>