<?php

	/*
	Template Name: Home
	*/

	// Helper function to process wysiwyg output
	function _get_wysiwyg_output( $meta_key, $post_id = 0 ) {
		global $wp_embed;
		$post_id = $post_id ? $post_id : get_the_id();
		$content = get_post_meta( $post_id, $meta_key, 1 );
		$content = $wp_embed->autoembed( $content );
		$content = $wp_embed->run_shortcode( $content );
		$content = wpautop( $content );
		$content = do_shortcode( $content );
		return $content;
	}

	// Loop wysiwyg content
	function _get_loop_wysiwyg( $meta_key ) {
		$content = wpautop( $meta_key );
		return $content;
	}

	// Staff 
	// $staff_pt = array( 'post_type' => 'staff', 'orderby' => 'date', 'posts_per_page' => -1 );
	// $staff_loop = new WP_Query( $staff_pt );

	// Homepage Post Data
	$homepage_intro_heading = get_post_meta( get_the_ID(), '_homepage_intro_heading', true );
	$homepage_mission_heading = get_post_meta( get_the_ID(), '_homepage_mission_heading', true );
	$homepage_mission_body = get_post_meta( get_the_ID(), '_homepage_mission_body', true );
	$homepage_discretion_heading = get_post_meta( get_the_ID(), '_homepage_discretion_heading', true );
	$homepage_discretion_body = get_post_meta( get_the_ID(), '_homepage_discretion_body', true );

	$homepage_who_we_are_heading = get_post_meta( get_the_ID(), '_homepage_who_we_are_heading', true );
	$homepage_who_we_are_subheading = get_post_meta( get_the_ID(), '_homepage_who_we_are_subheading', true );
	$homepage_who_we_are_body = get_post_meta( get_the_ID(), '_homepage_who_we_are_body', true );

	// Staff 
	$staff_pt = array( 'post_type' => 'staff', 'posts_per_page' => -1 );
	$staff_loop = new WP_Query( $staff_pt );

	// Services 
	$service_pt = array( 'post_type' => 'service', 'posts_per_page' => -1 );
	$service_loop = new WP_Query( $service_pt );


	// $homepage_spotlight_subheading = get_post_meta( get_the_ID(), '_homepage_spotlight_subheading', true );
	// $homepage_spotlight_link = get_post_meta( get_the_ID(), '_homepage_spotlight_link', true );
	// $homepage_spotlight_image = get_post_meta( get_the_ID(), '_homepage_spotlight_image', true );

	// Header include
	get_header();
	include 'navigation.php';
	// include 'homepage-spotlight.php';
?>
<!-- Main Content -->
<main>

	<!-- Spotlight Start -->
	<section class="spotlight">
		<div class="flex_row">
			<div class="flex_xs_12">
				<img id="spotlightLogo" src="<?php echo get_template_directory_uri(); ?>/images/content/paplease.svg" alt="PAPlease" />

				<div id="spotlightScroll" class="spotlight-scroll">
					<a href="#introduction"><span>SCROLL</span></a>
				</div>

			</div>
		</div>
	</section>
	<!-- Spotlight End -->

	<!-- Introduction Start -->
	<section id="introduction" class="introduction">
		<div class="flex_row">
			<div class="flex_xs_12">
				<div class="introduction-content">
					<img class="introduction-logo-desktop" src="<?php echo get_template_directory_uri(); ?>/images/content/paplease_black.svg" alt="PAPlease" />
					<img class="introduction-logo-mobile" src="<?php echo get_template_directory_uri(); ?>/images/content/paplease_mobile_logo.png" alt="PAPlease" />
					<h2><?php echo $homepage_intro_heading; ?></h2>
				</div>
			</div>
		</div>
	</section>
	<!-- Introduction End -->

	<!-- Mission Statement Start -->
	<section id="ourMission" class="mission-statement">
		<div class="container">
			<div class="flex_row">
				<div class="flex_xs_12">
					<h2><?php echo $homepage_mission_heading; ?></h2>
					<p><?php echo wpautop($homepage_mission_body); ?></p>
				</div>
			</div>
		</div>
	</section>
	<!-- Mission Statement End -->

	<!-- Discretion Start -->
	<section id="discretion" class="discretion">
		<div class="container">
			<div class="flex_row">
				<div class="flex_xs_12">
					<h2><?php echo $homepage_discretion_heading; ?></h2>
					<?php echo wpautop($homepage_discretion_body); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Discretion End -->

	<!-- Services Start -->
	<section id="services" class="services">
		<div class="container">
			<div class="flex_row">
				<div class="flex_xs_12">
					<h2>SERVICES</h2>
				</div>
			</div>
		</div>
		<div class="flex_row">
			<div class="flex_xs_12">
				<ul class="services-list">
					<?php
						$counter = 1;
					?>
					<?php
						if ( $service_loop->have_posts() ) :
							while ( $service_loop->have_posts() ) :
								$service_loop->the_post();
								$service_title = get_post_meta( get_the_ID(), '_service_title', true );
								$service_image_mobile = get_post_meta( get_the_ID(), '_service_image_mobile', true );
								$service_image_desktop = get_post_meta( get_the_ID(), '_service_image_desktop', true );
								$service_text = get_post_meta( get_the_ID(), '_service_text', true );
					?>
					<li>
						<div class="services-item">
							<div class="services-item-image">
								<img src="<?php echo $service_image_mobile; ?>" alt="<?php echo $service_title; ?>" />
							</div>
							<div class="services-item-title">
								<h3><?php echo $service_title; ?></h3>
							</div>
							<div class="services-item-image-desktop">
								<img src="<?php echo $service_image_desktop; ?>" alt="<?php echo $service_title; ?>" />
							</div>
						</div>
						<div class="services-reveal-btn"></div>
						<div class="services-reveal">
							<div class="services-overlay"></div>
							<?php echo wpautop($service_text); ?>
							<span class="serviceClose">X</span>
						</div>
					</li>

					<?php $counter++ ; ?>	
					<?php
							endwhile;
						endif;
					?>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Services End -->

	<!-- Who We Are Start -->
	<section id="whoWeAre" class="who-we-are">
		<div class="container">
			<div class="flex_row">
				<div class="flex_xs_12">
					<h2><?php echo $homepage_who_we_are_heading; ?></h2>
					<h3><?php echo $homepage_who_we_are_subheading; ?></h3>
					<p class="who-we-are-intro"><?php echo $homepage_who_we_are_body; ?></p>

					<?php
						$counter = 1;
					?>
					<?php
						if ( $staff_loop->have_posts() ) :
							while ( $staff_loop->have_posts() ) :
								$staff_loop->the_post();
								$staff_full_name = get_post_meta( get_the_ID(), '_staff_full_name', true );
								$staff_image = get_post_meta( get_the_ID(), '_staff_image', true );
								$staff_bio = get_post_meta( get_the_ID(), '_staff_bio', true );
					?>

					<div class="who-we-are-bio">
						<h3><?php echo $staff_full_name; ?></h3>
						<figure>
							<img src="<?php echo $staff_image; ?>" alt="<?php echo $staff_full_name; ?>" />
							<figcaption><?php echo $staff_full_name; ?></figcaption>
						</figure>
						<?php echo wpautop($staff_bio); ?>
					</div>
					
					<?php $counter++ ; ?>	
					<?php
							endwhile;
						endif;
					?>

				</div>
			</div>
		</div>
	</section>
	<!-- Who We Are End -->

	<!-- Contact Start -->
	<section id="contact" class="contact">
		<div class="container">
			<div class="flex_row">
				<div class="flex_xs_12">
					<h2>CONTACT</h2>
					<?php echo do_shortcode( '[contact-form-7 id="8" title="Contact form"]' ); ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact End -->
	
</main>
<!-- Main Content -->
<?php 
	get_footer();
?>