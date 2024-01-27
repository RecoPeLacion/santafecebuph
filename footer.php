<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
$logo = esc_attr( get_option( 'logo_url' ) );

?>

	<!-- accomodation -->
	<?php 
		if(is_front_page()) {
			?>
				<section class="sf_acc">
					<div class="cntr">
						<div class="sf_acc--wrapper">
							<div class="sf_newTitle">
								<h3 class="sf_mainTitle">Visit Us Now</h3>
							</div>
							<div class="sf_slider_button">
								<a href="<?php bloginfo('url'); ?>/tourism">
									Visit us now
								</a>
							</div>
						</div>
					</div>
				</section>
			<?php
		 }
	?>
	<!-- end of accomodation -->

	</main>

	<footer class="sf_newFooter">
		<div class="cntr">
			<div class="sf_newFooterWrapper">
				<div class="sf_newFooterRow">
					<div class="sf_newFooterCol">
						<div class="sf_newFooterContent">
							<div class="sf_newFooterLogo">
								<img src="<?php echo get_template_directory_uri()?>/assets/img/Santa-Fe-Cebu-Agency-Name-1.png" alt="Santa Fe Logo">
							</div>
							<h3>Official Website of the Municipality of Santa Fe</h3>
							<a href="#">About this website</a>
							<div class="sf_footerIgov">
								<p>
									Governance Team
									<a href="#">Municipality of Santa Fe</a>
								</p>
							</div>
						</div>
					</div>
					<div class="sf_newFooterCol">
						<div class="sf_newFooterLinkWrap">
							<div class="sf_newFooterLinksCard">
								<h3>Santa Fe Offices</h3>
								<ul>
									<li>
										<a href="<?php bloginfo('url'); ?>/offices/mayors">Mayor's Office</a>
									</li>
									<li>
										<a href="<?php bloginfo('url'); ?>/offices/tourism">Tourism Office</a>
									</li>
									<li>
										<a href="<?php bloginfo('url'); ?>/offices/ldrrmo">LDRRMO Office</a>
									</li>
									<li>
										<a href="<?php bloginfo('url'); ?>/offices/hrmo">HRMO Office</a>
									</li>
									<li>
										<a href="<?php bloginfo('url'); ?>/offices/health">Health Office</a>
									</li>
								</ul>
							</div>
							<div class="sf_newFooterLinksCard">
								<h3>Tourism Links</h3>
								<ul>
									<li>
										<a href="<?php bloginfo('url'); ?>/tourism/santa-fe-eats/">Santa Fe Eats</a>
									</li>
									<li>
										<a href="<?php bloginfo('url'); ?>/tourism/santa-fe-stays/">Santa Fe Stays</a>
									</li>
									<li>
										<a href="<?php bloginfo('url'); ?>/tourism/santa-fe-sights/">Santa Fe Sights</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="sf_newFooterCol">
						<div class="sf_newFooterGov">
							<img src="<?php echo get_template_directory_uri()?>/assets/img/coa-footerv2.svg" alt="Governtment Logo">
							<h3>Republic of the Philippines</h3>
							<p>All content is in the public domain unless otherwise stated.</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</footer>
	


	<?php wp_footer(); ?>
	<?php 
		$custom_js = get_option( 'theme_js' );
		if(!empty($custom_js)) {
			?>
				<?php echo '<script>'. $custom_js. '</script> '; ?>
			<?php
		}
	?>
	</body>
</html>