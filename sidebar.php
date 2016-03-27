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

<div id="secondary" class="sidebar" role="complementary">
<aside class="about">
  <div class="section-label">about</div>
  <div class="content">
    <p class="about">The Iceberg is a blog that celebrates depth and craft. Its goal is to showcase people who think deeply about things you didn’t know anyone thought deeply about.</p>
    <a href="/about" class="about-link">Read the manifesto.</a>
  </div>
</aside>
<aside class="newsletter">
  <div class="section-label">updates</div>
  <div class="content">
    <p class="follow-link">
      Updates weekly. Follow along on Twitter (<a href="https://twitter.com/icebergdotcool">@icebergdotcool</a>) or <a href="http://theiceberg.cool/feed/">RSS</a>.
    </p>
    <!-- Begin MailChimp Signup Form -->
    <p>Sign up for the newsletter and get weekly updates and B-Sides every Thursday.</p>
    <p><a href="http://us13.campaign-archive2.com/home/?u=3fe6665bc00b6eb1c420514bb&id=32b12fd93b" title="View previous campaigns">View previous issues.</a></p>
    <div id="mc_embed_signup">
    <form action="//cool.us13.list-manage.com/subscribe/post?u=3fe6665bc00b6eb1c420514bb&amp;id=32b12fd93b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
      <div id="mc_embed_signup_scroll">
        <div class="mc-field-group">
          <input type="email" name="EMAIL" class="required email" id="mce-EMAIL" required placeholder="yourname@email.com">
          <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
        </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3fe6665bc00b6eb1c420514bb_32b12fd93b" tabindex="-1" value=""></div>
      </div>
    </form>
    </div>
    <!--End mc_embed_signup-->
  </div>
</aside>
</div><!-- #secondary -->
