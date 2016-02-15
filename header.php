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
<!-- Twitter & Facebook Meta -->
<?php
if(is_single() || is_page()) {
	$og_url    = get_permalink();
 	$og_title  = get_the_title();
	$og_desc   = get_post_custom_values("subtitle")[0];
   $og_thumbs = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), full );
	$og_thumb  = $og_thumbs[0];
   if(!$og_thumb) {
		$og_thumb = get_bloginfo('template_url') . '/images/iceberg-twitter-card.png';
	}
	$twitter_handle = get_the_author_meta('nickname', $post->post_author);
?>
<meta name="twitter:card" value="summary" />
<meta name="twitter:url" value="<?php echo $og_url; ?>" />
<meta name="twitter:title" value="<?php echo $og_title; ?>" />
<meta name="twitter:description" value="<?php echo $og_desc; ?>" />
<meta name="twitter:image" value="<?php echo $og_thumb; ?>" />
<meta name="twitter:site" value="@theicebergdotcool" />
<meta name="twitter:creator" value="<?php echo $twitter_handle; ?>" />
<meta property="og:url" content="<?php echo $og_url; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $og_title; ?>" />
<meta property="og:description" content="<?php echo $og_desc; ?>" />
<meta property="og:image" content="<?php echo $og_thumb; ?>" />
<?
} else {
?>
<meta property="og:url" content="http://theiceberg.cool" />
<meta property="og:type" content="website" />
<meta property="og:title" content="The Iceberg" />
<meta property="og:description" content="A Blog About Depth." />
<meta property="og:image" content="<?php get_bloginfo('template_url'); ?>/images/iceberg-twitter-card.png" />
<?php } ?>
<!-- Typography -->
<link href="//cloud.webtype.com/css/711a5d35-acce-4765-9093-f280ff4e4222.css" rel="stylesheet" type="text/css" />
<script src="https://use.typekit.net/beo3fkm.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Facebook -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '466237823565480',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  window.share_fb = function() {
  	FB.ui({
  	  method: 'share',
  	  href: '<?php echo get_permalink(); ?>',
  	}, function(response){});
  }
</script>

<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		<?php
				function randomErrorMessage() {
					$messages = [
						"There's nothing here.",
						"Lost at sea?",
						"It's quiet out here.",
						"Hello?",
						"You hear the sound of waves."
					];
					echo $messages[array_rand($messages)];
				} 
				if (is_404()) : 
				?>
				<h1 class="error-page-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php randomErrorMessage(); ?></a></h1>
		<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php endif; ?>
		</div><!-- .site-branding -->
		<div class="gradient-piece gradient-1"></div>
		<div class="gradient-piece gradient-2"></div>
		<div class="gradient-piece gradient-3"></div>
	</header><!-- #masthead -->

	<?php if (is_archive() || is_tag()) : ?>
		<h2 class="other-page-title">
			<a href="/">×</a>
			<span> <?php the_archive_title() ?> </span>
		</h2>
	<?php endif ?>

	<div id="content" class="site-content">
