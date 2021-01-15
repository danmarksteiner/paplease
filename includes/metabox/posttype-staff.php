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
		'id'            => '_metabox_staff',
		'title'         => __( 'Staff Member', 'cmb2' ),
		'object_types'  => array( 'staff', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Case Study Name
	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Full Name', 'cmb2' ),
		'desc'       => __( 'The full name of the staff member', 'cmb2' ),
		'id'         => '_staff_full_name',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

	$cmb->add_field( array(
		'name'    => 'Staff Image',
		'desc'    => 'The staff members image',
		'id'      => '_staff_image',
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
		'name'       => __( 'Bio', 'cmb2' ),
		'desc'       => __( 'The bio text of the staff member', 'cmb2' ),
		'id'         => '_staff_bio',
		'type'       => 'wysiwyg',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
	) );

} );





?>