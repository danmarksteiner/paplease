<?php

	/*
	Template Name: Cookie
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
			<h1>Cookie Policy</h1>
			<p>Last updated: 02/01/2019</p>
			<h2>Background</h2>
			<p>This website paplease.com (“Our Site”) uses Cookies and similar technologies in order to distinguish you from other users. By using Cookies, we are able to provide you with a better experience and to improve Our Site by better understanding how you use it. Please read this Cookie Policy carefully and ensure that you understand it. Your acceptance of Our Cookie Policy is deemed to occur if you continue using Our Site. If you do not agree to Our Cookie Policy, please stop using Our Site immediately.</p>
			<ol>
				<li>
					<h2>Definitions &amp; Interpretation</h2>
					<p>In this Cookie Policy, unless the context otherwise requires, the following expressions have the following meanings:</p>
					<ul>
						<li>
							<p><strong>“Cookie”</strong><br>means a small file placed on your computer or device by Our Site when you visit certain parts of Our Site and/or when you use certain features of Our Site;</p>
						</li>
						<li>
							<p><strong>“Cookie Law”</strong><br>means the relevant parts of the Privacy and Electronic Communications (EC Directive) Regulations 2003 and of EU Regulation 2016/679 General Data Protection Regulation (“GDPR”)</p>
						</li>
						<li>
							<p><strong>“Personal Data”</strong><br>means any and all data that relates to an identifiable person who can be directly or indirectly identified from that data, as defined by the Data Protection Act 1998 EU Regulation 2016/679 General Data Protection Regulation (“GDPR”) and</p>
						</li>
						<li>
							<p><strong>“We/Us/Our”</strong><br>means PA Please, a company whose registered address is 21 Cranbrook Road, London, W4 2LH, and whose main trading address is 21 Cranbrook Road, London, W4 2LH.</p>
						</li>
					</ul>
				</li>
				<li>
					<h2>Information About Us</h2>
					<p>Our Site is owned and operated by PA Please.</p>
					<p><strong>Registered address:</strong> 21 Cranbrook Road, London, W4 2LH</p>
					<p><strong>Main trading address:</strong> 21 Cranbrook Road, London, W4 2LH</p>
					<br>
					<h3>Data Protection Officer: Tanya von Moser</h3>
					<p><strong>Email address:</strong> <a href="mailto:tanya@paplease.co.uk">tanya@paplease.co.uk</a></p>
					<p><strong>Telephone No:</strong> 020 37291063</p>
					<p><strong>Postal Address:</strong> 56 Osbaldeston Road, London, N167DR</p>
				</li>


				<li>
					<h2>How Does Our Site Use Cookies?</h2>
					<p>Our Site may place and access certain first party Cookies on your computer or device. First party Cookies are those placed directly by Us and are used only by Us. We use Cookies to facilitate and improve your experience of Our Site and to provide and improve our services. We have carefully chosen these Cookies and have taken steps to ensure that your privacy and personal data is protected and respected at all times.</p>
					<p>By using Our Site, you may also receive certain third-party Cookies on your computer or device. Third party Cookies are those placed by websites, services, and/or parties other than Us. Third party Cookies are used on Our Site for website analytics purposes only. For more details, please refer to the analytics section below.</p>
					<p>All Cookies used by and on Our Site are used in accordance with current Cookie Law. We may use some or all of the following types of Cookie:</p>
					<ul>
						<li>
							<h3>Strictly Necessary Cookies</h3>
							<p>A Cookie falls into this category if it is essential to the operation of Our Site, supporting functions such as logging in, your shopping basket, and payment transactions.</p>
						</li>
						<li>
							<h3>Analytics Cookies</h3>
							<p>It is important for Us to understand how you use Our Site, for example, how efficiently you are able to navigate around it, and what features you use. Analytics Cookies enable us to gather this information, helping Us to improve Our Site and your experience of it.</p>
						</li>
						<li>
							<h3>Functionality Cookies</h3>
							<p>Functionality Cookies enable Us to provide additional functions to you on Our Site such as personalisation and remembering your saved preferences. Some functionality Cookies may also be strictly necessary Cookies, but not all necessarily fall into that category.</p>
						</li>
						<li>
							<h3>Targeting Cookies</h3>
							<p>It is important for Us to know when and how often you visit Our Site, and which parts of it you have used (including which pages you have visited and which links you have visited). As with analytics Cookies, this information helps us to better understand you and, in turn, to make Our Site and advertising more relevant to your interests.</p>
						</li>
						<li>
							<h3>Third Party Cookies</h3>
							<p>Third party Cookies are not placed by Us; instead, they are placed by third parties that provide services to Us and/or to you. Third party Cookies may be used by advertising services to serve up tailored advertising to you on Our Site, or by third parties providing analytics services to Us (these Cookies will work in the same way as analytics Cookies described above).</p>
						</li>
						<li>
							<h3>Persistent Cookies</h3>
							<p>Any of the above types of Cookie may be a persistent Cookie. Persistent Cookies are those which remain on your computer or device for a predetermined period and are activated each time you visit Our Site.</p>
						</li>
						<li>
							<h3>Session Cookies</h3>
							<p>Any of the above types of Cookie may be a session Cookie. Session Cookies are temporary and only remain on your computer or device from the point at which you visit Our Site until you close your browser. Session Cookies are deleted when you close your browser.</p>
						</li>
					</ul>
					<p>Cookies on Our Site are not permanent and will expire after 24 hours.</p>
					<p>For more details of the personal data that We collect and use, the measures we have in place to protect personal data, your legal rights, and our legal obligations, please refer to our Privacy Policy. (<a href="http://www.paplease.com/privacy-policy" target="_blank">www.paplease.com/privacy-policy</a>)</p>
					<p>For more specific details of the Cookies that We use, please refer to the table below.</p>
				</li>
				<li>
					<h2>What Cookies Does Our Site Use?</h2>
					<p>We use a first party session cookie to help our site function. There is no way to prevent this cookie being set other than to not use our site.</p>
					<table border="1" cellpadding="0" cellspacing="0" width="100%">
						<tbody><tr>
							<th>Name of Cookie</th>
							<th>Purpose &amp; Type</th>
							<th>Provider</th>
							<th>Strictly Necessary</th>
						</tr>
						<tr>
							<td>Session cookie</td>
							<td>Enables required functionality of the website and browser</td>
							<td>PA Please</td>
							<td>Yes</td>
						</tr>
					</tbody></table>
					<p>Our Site uses analytics services provided by Google. Website analytics refers to a set of tools used to collect and analyse anonymous usage information, enabling Us to better understand how Our Site is used. This, in turn, enables Us to improve Our Site and the services offered through it. You do not have to allow Us to use these Cookies, however whilst Our use of them does not pose any risk to your privacy or your safe use of Our Site, it does enable Us to continually improve Our Site, making it a better and more useful experience for you.</p>
					<p>The analytics service(s) used by Our Site use(s) analytics Cookies to gather the required information.</p>
					<p>The analytics service(s) used by Our Site use(s) the following analytics Cookies:</p>
					<table border="1" cellpadding="0" cellspacing="0" width="100%">
						<tbody><tr>
							<th>Name of Cookie</th>
							<th>Purpose &amp; Type</th>
							<th>Provider</th>
							<th>Strictly Necessary</th>
						</tr>
						<tr>
							<td>Google Analytics</td>
							<td>For analytics tracking of anonymous user behaviour</td>
							<td>Google</td>
							<td>No</td>
						</tr>
					</tbody></table>
				</li>
				<li>
					<h2>Consent and Control</h2>	
					<p>Before Cookies are placed on your computer or device, you will be shown a notice requesting your consent to set those Cookies. By continuing to use our website you are giving your consent to the placing of Cookies and are enabling us to provide the best possible experience and service to you.</p>
					<p>By default, most internet browsers accept Cookies but this can be changed. For further details, please consult the help menu in your internet browser or the documentation that came with your device.</p>
					<p>The links below provide instructions on how to control Cookies in all mainstream browsers:</p>
					<ul>
						<li>
							<p><strong>Google Chrome:</strong></p>
							<p><a href="https://support.google.com/chrome/answer/95647?hl=en-GB" target="_blank">https://support.google.com/chrome/answer/95647?hl=en-GB</a></p>
						</li>
						<li>
							<p><strong>Microsoft Internet Explorer:</strong></p>
							<p><a href="https://support.microsoft.com/en-us/kb/278835" target="_blank">https://support.microsoft.com/en-us/kb/278835</a></p>
						</li>
						<li>
							<p><strong>Microsoft Edge:</strong></p>
							<p><a href="https://support.microsoft.com/en-gb/products/microsoft-edge" target="_blank">https://support.microsoft.com/en-gb/products/microsoft-edge</a> (Please note that there are no specific instructions at this time, but Microsoft support will be able to assist)</p>
						</li>
						<li>
							<p><strong>Safari (macOS):</strong></p>
							<p><a href="https://support.apple.com/kb/PH21411?viewlocale=en_GB&amp;locale=en_GB" target="_blank">https://support.apple.com/kb/PH21411?viewlocale=en_GB&amp;locale=en_GB</a></p>
						</li>
						<li>
							<p><strong>Safari (iOS):</strong></p>
							<p><a href="https://support.apple.com/en-gb/HT201265" target="_blank">https://support.apple.com/en-gb/HT201265</a></p>
						</li>
						<li>
							<p><strong>Mozilla Firefox:</strong></p>
							<p><a href="https://support.mozilla.org/en-US/kb/enable-and-disable-Cookies-website-preferences" target="_blank">https://support.mozilla.org/en-US/kb/enable-and-disable-Cookies-website-preferences</a></p>
						</li>
						<li>
							<p><strong>Android:</strong></p>
							<p><a href="https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DAndroid&amp;hl=en" target="_blank">https://support.google.com/chrome/answer/95647?co=GENIE.Platform%3DAndroid&amp;hl=en</a> (Please refer to your device’s documentation for manufacturers’ own browsers)</p>
						</li>
					</ul>
				</li>
				<li>
					<h2>Changes to this Cookie Policy</h2>
					<p>We may alter this Cookie Policy at any time. If We do so, details of the changes will be highlighted at the top of this page. Any such changes will become binding on you on your first use of Our Site after the changes have been made. You are therefore advised to check this page from time to time.</p>
					<p>In the event of any conflict between the current version of this Cookie Policy and any previous version(s), the provisions current and in effect shall prevail unless it is expressly stated otherwise.</p>
				</li>
				<li>
					<h2>Further Information</h2>
					<p>If you would like to know more about how We use Cookies, please contact us at <a href="mailto:tanya@paplease.co.uk">tanya@paplease.co.uk</a>, by telephone on 020 37291063, or by post at 56 Osbaldeston Road London N167DR.</p>
					<p>In the event of any conflict between the current version of this Cookie Policy and any previous version(s), the provisions current and in effect shall prevail unless it is expressly stated otherwise.</p>
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