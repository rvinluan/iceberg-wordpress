<?php
/**
 * Template Name: About
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iceberg
 */

get_header(); ?>

  <div id="about-page" class="page-content">
    <main id="page-main" class="site-main" role="main">
      <div class="about-text">
        <div class="section-label"><?php the_title(); ?></div>
        <?php
        while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/content', 'page' );
        endwhile; // End of the loop.
        ?>
      </div>
      <div class="social">
        <div class="section-label">Updates</div>
        <p>The Iceberg updates weekly.</p>
        <p>Follow <a href="http://twitter.com/icebergdotcool">@icebergdotcool</a> on Twitter.</p>
        <p>Email Robert at <a href="mailto:robert@theiceberg.cool">robert@theiceberg.cool</a></p>
      </div>
      <div class="colophon">
        <div class="section-label">Credits</div>
        <p>Powered by <a href="https://wordpress.org/">Wordpress</a>. Theme built on top of <a href="http://underscores.me/">Underscore</a>.</p>
        <p>Typeset in Brooklyn (<a href="http://vllg.com/constellation/brooklyn">Village</a>), FF More (<a href="https://typekit.com/fonts/ff-more-web-pro">FontFont</a>), and Input (<a href="http://input.fontbureau.com/">FontBureau</a>).</p>
        <p>Link icon by Casey Fluster, from <a href="https://thenounproject.com/search/?q=link&i=59196">The Noun Project</a>.</p>
      </div>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
