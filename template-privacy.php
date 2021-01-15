<?php

	/*
	Template Name: Privacy
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

	// Header include
	get_header();
	include 'navigation.php';
	// include 'homepage-spotlight.php';
?>
<!-- Main Content -->
<main>

	<!-- Policy Start -->
	<section class="policy-pages">
		<div class="container">
			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/content/paplease_black.svg" alt="PAPlease" /></a>
			<h1>Privacy Policy</h1>
			<p>Last updated: 02/01/2019</p>
			<h2>Background</h2>
			<p>PA Please understands that your privacy is important to you and that you care about how your personal data is used. We respect and value the privacy of everyone who visits this website, www.paplease.com (“Our Site”) and as described in Parts 6 and 7, below, we do not collect personal data about you unless you contact us. Any personal data we do collect will only be used as permitted by law.</p>
			<p>Please read this Privacy Policy carefully and ensure that you understand it. Your acceptance of this Privacy Policy is deemed to occur upon your first use of Our Site. If you do not accept and agree with this Privacy Policy, you must stop using Our Site immediately.</p>
			<ol>
				<li>
					<h2>1. Definitions &amp; Interpretation</h2>
					<p>In this Policy the following terms shall have the following meanings:</p>
					<ul>
						<li>
							<p><strong>“Account”</strong><br>means an account required to access and/or use certain areas and features of Our Site;</p>
						</li>
						<li>
							<p><strong>“Cookie”</strong><br>means a small text file placed on your computer or device by Our Site when you visit certain parts of Our Site and/or when you use certain features of Our Site. Details of the Cookies used by Our Site are set out on our cookie page: <a href="www.paplease.com/cookie-policy">www.paplease.com/cookie-policy</a></p>
						</li>
						<li>
							<p><strong>“Cookie Law”</strong><br>means the relevant parts of the Privacy and Electronic Communications (EC Directive) Regulations 2003;</p>
						</li>
					</ul>
				</li>
				<li>
					<h2>2. Information About Us</h2>
					<p>Our Site is owned and operated by PA Please.</p>
					<p><strong>Address:</strong> 21 Cranbrook Road, London, W4 2LH</p>
					<br>
					<h3>Data Protection Officer: Tanya von Moser</h3>
					<p><strong>Email address:</strong> <a href="mailto:tanya@paplease.co.uk">tanya@paplease.co.uk</a></p>
					<p><strong>Telephone No:</strong> 020 37291063</p>
					<p><strong>Postal Address:</strong> 56 Osbaldeston Road, London N16 7DR</p>
				</li>
				<li>
					<h2>3. What Does This Policy Cover?</h2>
					<p>This Privacy Policy applies only to your use of Our Site. Our Site may contain links to other websites. Please note that we have no control over how your data is collected, stored, or used by other websites and we advise you to check the privacy policies of any such websites before providing any data to them.</p>
				</li>
				<li>
					<h2>4. What is Personal Data?</h2>
					<p>Personal data is defined by the General Data Protection Regulation (EU Regulation 2016/679) (the “GDPR”) as ‘any information relating to an identifiable person who can be directly or indirectly identified in particular by reference to an identifier’.</p>
					<p>Personal data is, in simpler terms, any information about you that enables you to be identified. Personal data covers obvious information such as your name and contact details, but it also covers less obvious information such as identification numbers, electronic location data, and other online identifiers.</p>
				</li>
				<li>
					<h2>5. What Are My Rights?</h2>
					<p>Under the GDPR, you have the following rights, which we will always work to uphold:</p>
					<ol type="a">
						<li><p>The right to be informed about our collection and use of your personal data. This Privacy Policy should tell you everything you need to know, but you can always contact us to find out more or to ask any questions using the details in Part 10.</p></li>
						<li><p>The right to access the personal data we hold about you. Part 11 will tell you how to do this.</p></li>
						<li><p>The right to have your personal data rectified if any of your personal data held by us is inaccurate or incomplete. Please contact us using the details in Part 12 to find out more.</p></li>
						<li><p>The right to be forgotten, i.e. the right to ask us to delete or otherwise dispose of any of your personal data that we have. Please contact us using the details in Part 12 to find out more.</p></li>
						<li><p>The right to restrict (i.e. prevent) the processing of your personal data.</p></li>
						<li><p>The right to object to us using your personal data for a particular purpose or purposes.</p></li>
						<li><p>The right to data portability. This means that, if you have provided personal data to us directly, we are using it with your consent or for the performance of a contract, and that data is processed using automated means, you can ask us for a copy of that personal data to re-use with another service or business in many cases.</p></li>
						<li><p>Rights relating to automated decision-making and profiling: we do not use your personal data in this way.</p></li>
					</ol>
					<p>For more information about our use of your personal data or exercising your rights as outlined above, please contact us using the details provided in Part 12.</p>
					<p>Further information about your rights can also be obtained from the Information Commissioner’s Office or your local Citizens Advice Bureau.</p>
					<p>If you have any cause for complaint about our use of your personal data, you have the right to lodge a complaint with the Information Commissioner’s Office.</p>
				</li>
				<li>
					<h2>6. What Data Do We Collect?</h2>
					<p>Depending upon your use of Our Site, we may collect some or all of the following personal and non-personal data (please also see our Cookie Policy: <a href="http://www.paplease.com/cookie-policy">www.paplease.com/cookie-policy</a>):</p>
					<ul>
						<li><p>IP address</p></li>
						<li><p>Web browser type and version</p></li>
						<li><p>Operating system</p></li>
						<li><p>A list of URLs starting with a referring site, your activity on Our Site, and the site you exit to</p></li>
					</ul>
				</li>
				<li>
					<h2>7. How Do You Use My Personal Data?</h2>
					<p>Under the GDPR, we must always have a lawful basis for using personal data. This may be because the data is necessary for our performance of a contract with you, because you have consented to our use of your personal data, or because it is in our legitimate business interests to use it. Your personal data may be used for one of the following purposes:</p>
					<ul>
						<li><p>Personalising and tailoring your experience on Our Site.</p></li>
						<li><p>Personalising and tailoring our services for you.</p></li>
						<li><p>Communicating with you. This may include responding to emails or calls from you.</p></li>
						<li><p>Supplying you with information by email that you have opted-in to (you may unsubscribe or opt-out at any time by following the instructions on an email from PA Please).</p></li>
						<li><p>Analysing your use of Our Site to enable us to continually improve Our Site and your user experience.</p></li>
					</ul>
					<p>With your permission and/or where permitted by law, we may also use your personal data for marketing purposes, which may include contacting you by email with information, news, and event invitations relating to our services. You will not be sent any unlawful marketing or spam. We will always work to fully protect your rights and comply with our obligations under the GDPR and the Privacy and Electronic Communications (EC Directive) Regulations 2003, and you will always have the opportunity to opt-out.</p>
				</li>
				<li>
					<h2>8. How Long Will You Keep My Personal Data?</h2>
					<p>We will not keep your personal data for any longer than is necessary in light of the reason(s) for which it was first collected. Your personal data will therefore be kept for the following periods (or, where there is no fixed period, the following factors will be used to determine how long it is kept):</p>
					<ul>
						<li><p>Employment records will be kept in secure files for seven years after leaving date and then deleted</p></li>
					</ul>
				</li>
				<li>
					<h2>9. How &amp; Where Do You Store My Data?</h2>
					<p>We will only store your personal data in the UK. This means that it will be fully protected under the GDPR.</p>
					<p>Personal data security is essential to us, and to protect personal data, we take the following measures:</p>
					<ul>
						<li><p>All current employee records are stored digitally on the PA Please secure servers or on third party websites that are compliant with GDPR.</p></li>
					</ul>
				</li>
				<li>
					<h2>10. Do You Share My Personal Data?</h2>
					<p>We will not share any of your personal data with any third parties for any purposes, subject to one important exception.</p>
					<p>In some limited circumstances, we may be legally required to share certain personal data, which might include yours, if we are involved in legal proceedings or complying with legal obligations, a court order, or the instructions of a government authority.</p>
				</li>
				<li>
					<h2>11. How Can I Access My Personal Data?</h2>
					<p>If you want to know what personal data we have about you, you can ask us for details of that personal data and for a copy of it (where any such personal data is held). This is known as a “subject access request”.</p>
					<p>All subject access requests should be made in writing and sent to the email or postal addresses shown in Part 12.</p>
					<p>There is not normally any charge for a subject access request. If your request is ‘manifestly unfounded or excessive’ (for example, if you make repetitive requests) a fee may be charged to cover our administrative costs in responding.</p>
					<p>We will respond to your subject access request within less than one month and, in any case, not more than one month of receiving it. Normally, we aim to provide a complete response, including a copy of your personal data within that time. In some cases, however, particularly if your request is more complex, more time may be required up to a maximum of three months from the date we receive your request. You will be kept fully informed of our progress.</p>
				</li>
				<li>
					<h2>12. How Do I Contact You?</h2>
					<p>To contact us about anything to do with your personal data and data protection, including to make a subject access request, please use the following details for the attention of Tanya von Moser:</p>
					<p><strong>Email address:</strong> <a href="mailto:tanya@paplease.co.uk">tanya@paplease.co.uk</a></p>
					<p><strong>Telephone No:</strong> 020 37291063</p>
					<p><strong>Postal Address:</strong> 56 Osbaldeston Road, London N16 7DR</p>
				</li>
				<li>
					<h2>13. Changes to this Privacy Policy</h2>
					<p>We may change this Privacy Notice from time to time. This may be necessary, for example, if the law changes, or if we change our business in a way that affects personal data protection.</p>
					<p>Any changes will be immediately posted on Our Site and you will be deemed to have accepted the terms of the Privacy Policy on your first use of Our Site following the alterations. We recommend that you check this page regularly to keep up-to-date.</p>
				</li>
			</ol>
		</div>
	</section>
	<!-- Policy End -->
	
</main>
<!-- Main Content -->
<?php 
	get_footer();
?>