<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package app-beanbag
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<a class="skip-link screen-reader-text sr-only" href="#main"><?php esc_html_e( 'Skip to content', 'app-beanbag' ); ?></a>

	<header id="header">
		<div class="container">			
			<nav class="navbar navbar-expand-md">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand">
					<img src="https://via.placeholder.com/250x75" class="img-fluid" alt="App Beanbag"/>
				</a>
				<ul class="navbar-nav ml-auto d-none d-md-flex">
					<li class="navbar-item">
						<a href="#" class="nav-link">Events</a>
					</li>
					<li class="navbar-item">
						<a href="#" class="nav-link">Artists</a>
					</li>
					<li class="navbar-item">
						<a href="#" class="nav-link">Venues</a>
					</li>
					<li class="navbar-item">
						<a href="#" class="nav-link">About</a>
					</li>
				</ul>				
				<div aria-label="Menu Toggle" class="menu-toggle align-middle ml-auto cursor-pointer d-block d-md-none">
					<i class="fa fa-bars"></i>
				</div>
			</nav>
		</div>
	</header><!-- #header -->
