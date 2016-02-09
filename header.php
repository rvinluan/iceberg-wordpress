<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iceberg
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//cloud.webtype.com/css/711a5d35-acce-4765-9093-f280ff4e4222.css" rel="stylesheet" type="text/css" />
<script src="https://use.typekit.net/beo3fkm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->
		<div class="gradient-piece gradient-1"></div>
		<div class="gradient-piece gradient-2"></div>
		<div class="gradient-piece gradient-3"></div>
	</header><!-- #masthead -->

	<?php if (!is_home() && !is_page() && !is_404()) : ?>
		<h2 class="other-page-title">
			<a href="/">×</a>
			<span> <?php the_archive_title() ?> </span>
		</h2>
	<?php endif ?>

	<div id="content" class="site-content">
