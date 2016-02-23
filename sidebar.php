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
  <p class="follow-link">
    Updates weekly. Follow along on Twitter (<a href="https://twitter.com/icebergdotcool">@icebergdotcool</a>) or <a href="http://theiceberg.cool/feed/">RSS</a>.
  </p>
</aside><!-- #secondary -->
