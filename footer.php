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
	</main>
	<footer class="sf_main-footer">
		<div class="cntr">
			<div class="sf_main-footer--logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo $logo; ?>" alt="Santa Fe Logo">
				</a>
				<h4 class="sf_main-footer--logo-text">Official Webportal of the Municipality<br/> of Santa Fe LGU Legislative Office</h4>
			</div>
			<div class="sf_main-footer--wrapper">
				<div class="sf_main-footer--col">
					<h3 class="sf_main-footer-title">
					<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
						Contact Info
					</h3>
					<ul class="sf_main-footer--links">
						<li class="sf_main-footer--links-item">
							<a>
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>
								5Q3R+WXR, National Road, Santa Fe, 6047 Cebu
							</a>
						</li>
						<li class="sf_main-footer--links-item">
							<a>
								<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
								424-1234
							</a>
						</li>
						<li class="sf_main-footer--links-item">
							<a>
							<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg>
								info.santafecebu@gmail.com
							</a>
						</li>
					</ul>
				</div>
				<div class="sf_main-footer--col">
					<h3 class="sf_main-footer-title">
					<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
						Phone Numbers
					</h3>
					<ul class="sf_main-footer--links">
						<li class="sf_main-footer--links-item">
							<a>
								Police: 456-7890
							</a>
						</li>
						<li class="sf_main-footer--links-item">
							<a>
								Fire Station: 456-7890
							</a>
						</li>
						<li class="sf_main-footer--links-item">
							<a>
								Municipal Hall: 456-7890
							</a>
						</li>
					</ul>
				</div>
				<div class="sf_main-footer--col">
					<h3 class="sf_main-footer-title">
					<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z"/></svg>
						Quick Links
					</h3>
					<ul class="sf_main-footer--links">
						<li class="sf_main-footer--links-item">
							<a>
								Resolutions
							</a>
						</li>
						<li class="sf_main-footer--links-item">
							<a>
								Ordinances
							</a>
						</li>
						<li class="sf_main-footer--links-item">
							<a>
								Covid-19 Protocols
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<section class="sf_copyright">
		<div class="cntr">
			<p>Copyright 2023 All Rights Reserved | Bayan ng Santa Fe | Lalawigan ng Cebu</p>
		</div>
	</section>
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