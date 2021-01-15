<!DOCTYPE html>
<html <?php language_attributes(); ?> >

	<head>

		<!-- Metadata -->
		<title><?php bloginfo('name') ?></title>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta name="description" content="<?php the_title(); ?> official website.">
		<meta name="keywords" content="orestea,uk,rock,band,music,metal,lisa avon,lloyd wilson,michael quinn,lisa marie">
		<meta property="og:title" content="<?php the_title(); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php site_url(); ?>" />
		<meta property="og:image" content="https://img.youtube.com/vi/<?php echo $video_id[0]; ?>/hqdefault.jpg" />
		<?php if ($post->ID == 53) { echo '<meta name="robots" content="noindex,nofollow">'; } ?>

		<!-- Metadata -->

		<!-- favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png">
		<!-- favicon -->

		<!-- WP -->
		<?php wp_head(); ?>
		<!-- WP -->

	</head>

	<body <?php body_class(); ?> >
	<div class="body-wrapper fade-out">