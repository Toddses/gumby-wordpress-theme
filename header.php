<?php
/**
 * The Header for the theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package gumby-wordpress-theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="author" href="<?php get_template_directory(); ?>/inc/humans.txt">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header>
	</header>

	<div id="content" class="site-content">