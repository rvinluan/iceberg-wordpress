<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iceberg
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="sidebar" role="complementary">
  <div class="section-label">about</div>
  <p class="about">The Iceberg is a blog that celebrates depth and craft. Its goal is to showcase people who think deeply about things you didn’t know anyone thought deeply about.</p>
  <a href="/about" class="about-link">Read the manifesto.</a>
  <a href="http://twitter.com/icebergdotcool" class="twitter-link">@icebergdotcool</a>
</aside><!-- #secondary -->
