<?php




	// WYSIWYG formatting helper
	function get_wysiwyg_output( $meta_key, $post_id = 0 ) {
	    global $wp_embed;

	    $post_id = $post_id ? $post_id : get_the_id();

	    $content = get_post_meta( $post_id, $meta_key, 1 );
	    $content = $wp_embed->autoembed( $content );
	    $content = $wp_embed->run_shortcode( $content );
	    $content = wpautop( $content );
	    $content = do_shortcode( $content );

	    return $content;
	}





?>