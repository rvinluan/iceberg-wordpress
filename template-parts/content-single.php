<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iceberg
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="title">
      <div class="section-label">BY <?php the_author_link(); ?> // <?php echo get_the_date("m-d-y") ?></div>
      <?php
      the_title( '<h2>', '</h2>' );
      ?>
  </div>
  <div class="subtitle">
      <h3><?php echo get_post_custom_values("subtitle")[0]; ?></h3>
  </div>
  <div class="link-title">
      <?php if (get_post_custom_values('link type')[0] != null) : ?>
        <div class="section-label"><?php echo get_post_custom_values("link type")[0]; ?></div>
      <?php else : ?>
        <div class="section-label">nothing</div>
      <?php endif; ?>
      <div class="link-title-content">
        <a class="link-title-link" href="<?php echo get_post_custom_values('link url')[0]; ?>"><?php echo get_post_custom_values("link title")[0]; ?></a>
        <div class="embed">
          <?php if (get_post_custom_values('link embed')[0] != null) : ?>
            <?php echo get_post_custom_values("link embed")[0]; ?>
          <?php elseif (get_post_custom_values('link image url')[0] != null) : ?>
            <a href="<?php echo get_post_custom_values('link url')[0]; ?>">
            <img src='<?php echo get_post_custom_values("link image url")[0]; ?>'>
            </a>
          <?php elseif (get_post_custom_values('link quote')[0] != null) : ?>
            <a href="<?php echo get_post_custom_values('link url')[0]; ?>">
            <blockquote>“<?php echo get_post_custom_values("link quote")[0]; ?>”</blockquote>
            </a>
          <?php else : ?>
            <a class="generic-link-out" href="<?php echo get_post_custom_values('link url')[0]; ?>">
              <div>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 87.5"><path d="M59.3 12.8c-.8-.8-2-1.3-3.3-1.3H30c-1.3 0-2.5.5-3.3 1.3-.8.8-1.4 2-1.4 3.2v22.3c0 1.2.5 2.4 1.4 3.2.8.8 2 1.3 3.3 1.3h7v-3.9h-7.6V15.4h27.3V39H49v3.9h7c1.3 0 2.5-.5 3.3-1.3.8-.8 1.4-2 1.4-3.2V16c0-1.2-.5-2.4-1.4-3.2z"/><path d="M43.6 28.5c-.8-.8-2-1.3-3.3-1.3h-6.9v3.9H41v23.6H13.7V31.1h7.7v-3.9h-7c-1.3 0-2.5.5-3.3 1.3-.8.8-1.4 2-1.4 3.2V54c0 1.2.5 2.4 1.4 3.2.8.8 2 1.3 3.3 1.3h25.9c1.3 0 2.5-.5 3.3-1.3.8-.8 1.4-2 1.4-3.2V31.7c0-1.2-.5-2.4-1.4-3.2z"/></svg>
              ⟶
              </div>
            </a>
          <?php endif ?>
        </div>
      </div>
  </div>
  <div class="entry-content">
      <div class="section-label">notes</div>
      <?php
        the_content();
      ?>
   </div>
   <div class="meta">
     <div class="section-label">share</div>
    <ul>
      <li><a class="" href="javascript:share_fb()">Facebook</a></li>
      <li>
        <a href="http://twitter.com/intent/tweet?via=icebergdotcool&url=<?php echo get_permalink(); ?>">Twitter</a>
      </li>
      <li><a href="<?php echo get_permalink(); ?>">Permalink</a></li>
    </ul>
   </div>
   <div class="tags">
       <div class="section-label">tags</div>
       <ul class="tags-list">
           <?php the_tags( '<li>', '</li><li>', '</li>' ); ?> 
       </ul>
   </div>
</article><!-- #post-## -->