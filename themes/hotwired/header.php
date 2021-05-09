<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<meta name="theme-color" content="#663399">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrap">
	<header>
		<a href="<?php bloginfo('home'); ?>"><img class="header" alt="HotWired.tech logo" src="<?php echo get_stylesheet_directory_uri(); ?>/i/logo_purple.svg" /></a>
		<p class="tagline">-- potentially mocking Clinton again for the first time since his last presidential term</p>
		<nav>
			<?php wp_nav_menu( array(
				'theme_location' => 'menu'
			) );?>
		</nav>
	</header>