<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TEMPLATENAME
 */
	$fav = esc_attr( get_option( 'favicon_url' ) );
	$logo = esc_attr( get_option( 'logo_url' ) );
	$fb = esc_attr( get_option('fb_url') );
	$twit = esc_attr( get_option('twitter_url') );
	$insta = esc_attr( get_option('insta_url') );
	$addressUrl = nl2br(esc_attr( get_option( 'address_url' ) ));
	$phoneUrl = esc_attr( get_option( 'phone_url' ) );
	$copyright = esc_attr( get_option( 'copyright_url' ) );
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
		<?php
		bloginfo('name');
		echo ' | ';
        if (wp_title('', false)) {
			echo "";
        } else {
            echo bloginfo('description');
        } wp_title('');
		?>
	</title>
    <link rel="icon" href="<?php echo $fav; ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
    <script src="<?php echo get_template_directory_uri()?>/assets/js/jquery.min.js"></script>
	<?php wp_head(); ?>
	<?php 
		$custom_css = get_option( 'theme_css' );
		if(!empty($custom_css)) {
			?>
				<?php echo '<style type="text/css">'. $custom_css. '</style> '; ?>
			<?php
		}
	?>
</head>
<body <?php body_class(); ?>>

<header class="sf_main-header">
	<div class="sf_main-header--top">
		<div class="cntr">
			<div class="sf_main-header--top-wrapper">
				<div class="sf_main-header--top-button">
					<a href="#">How can we serve you better?</a>
				</div>
				<h4 class="sf_main-header--top-title">Municipality of Santa Fe LGU Legislative Office</h4>
				<div class="sf_main-header--top-phone">
					<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/></svg>
						424-1234
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="sf_main-header--nav">
		<div class="cntr">
			<div class="sf_main-header--nav-wrapper">
				<div class="sf_main-header--logo">
					<a href="<?php bloginfo('url'); ?>">
						<img src="<?php echo $logo; ?>" alt="Santa Fe Logo">
					</a>
				</div>
				<div class="sf_main-header--menu">
					<?php
						wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'sf_main-header--navbar',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Custom_Navwalker::fallback',
							'walker'            => new WP_Custom_Navwalker(),
						) );
					?>
				</div>
				<div class="sf_main-header--icon-wrapper">
					<div class="sf_main-header--search">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
						</a>
					</div>
					<div class="sf_main-header--hamburger">
						<a href="#">
							<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<main class="sf_site-main">