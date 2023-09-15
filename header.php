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
    <link rel="icon" href="<?php echo $logo; ?>">
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
						<a href="#" class="sf_searchToggle">
							<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
						</a>
						<div class="sf_searchFormModal">
							<div class="sf_searchButton sf_searchToggle">
								<svg viewBox="0 0 512 512" fill="#434d5d"> <path d="M437.5 386.6L306.9 256l130.6-130.6c14.1-14.1 14.1-36.8 0-50.9-14.1-14.1-36.8-14.1-50.9 0L256 205.1 125.4 74.5c-14.1-14.1-36.8-14.1-50.9 0-14.1 14.1-14.1 36.8 0 50.9L205.1 256 74.5 386.6c-14.1 14.1-14.1 36.8 0 50.9 14.1 14.1 36.8 14.1 50.9 0L256 306.9l130.6 130.6c14.1 14.1 36.8 14.1 50.9 0 14-14.1 14-36.9 0-50.9z" fillrule="evenodd"></path> </svg>
							</div>
							<div class="sf_searchWrapper">
								<div class="sf_searchForm">
									<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
										<input type="text" class="sf_searchField" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search..." />
										<input type="submit" class="sf_searchSubmit" id="searchsubmit" value="Search" />
									</form>
								</div>
							</div>
						</div>
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