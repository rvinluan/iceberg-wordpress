<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iceberg
 */

$subtitle = get_field("subtitle");
$link_type = get_field("link_type") == "Other" ? get_field("link_type_text") : get_field("link_type");
$link_title = get_field("link_title");
$link_url = get_field("link_url");
$embed_type = get_field("embed_type");
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="title">
	    <div class="section-label">BY <?php the_author_link(); ?> // <?php echo get_the_date("m-d-y") ?></div>
	    <a href="<?php echo get_permalink(); ?>">
	    <?php
	    the_title( '<h2>', '</h2>' );
	    ?>
	    </a>
	</div>
	<div class="tags">
	    <div class="section-label">tags</div>
	    <ul class="tags-list">
	        <?php the_tags( '<li>', '</li><li>', '</li>' ); ?> 
	    </ul>
	</div>
	<div class="subtitle">
	    <div class="section-label">subtitle</div>
	    <h3><?php echo $subtitle ?></h3>
	</div>
	<div class="link-title">
			<?php if ($link_type != null) : ?>
		    <div class="section-label"><?php echo $link_type ?></div>
		  <?php else : ?>
		  	<div class="section-label">nothing</div>
		  <?php endif; ?>
	    <a href="<?php echo $link_url ?>"><?php echo $link_title ?></a>
	</div>
	<div class="embed">
		<?php if ($embed_type == "Embed") : ?>
			<?php echo get_field("embed_embed_code") ?>
		<?php elseif ($embed_type == "Image") : ?>
			<a href="<?php echo $link_url ?>">
			<img src='<?php echo get_field("embed_image_url") ?>'>
			</a>
		<?php elseif ($embed_type == "Quote") : ?>
			<a href="<?php echo $link_url ?>">
			<blockquote>“<?php echo get_field("embed_quote_text") ?>”</blockquote>
			</a>
		<?php else : ?>
			<a class="generic-link-out" href="<?php echo $link_url ?>">
				<div>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 87.5"><path d="M59.3 12.8c-.8-.8-2-1.3-3.3-1.3H30c-1.3 0-2.5.5-3.3 1.3-.8.8-1.4 2-1.4 3.2v22.3c0 1.2.5 2.4 1.4 3.2.8.8 2 1.3 3.3 1.3h7v-3.9h-7.6V15.4h27.3V39H49v3.9h7c1.3 0 2.5-.5 3.3-1.3.8-.8 1.4-2 1.4-3.2V16c0-1.2-.5-2.4-1.4-3.2z"/><path d="M43.6 28.5c-.8-.8-2-1.3-3.3-1.3h-6.9v3.9H41v23.6H13.7V31.1h7.7v-3.9h-7c-1.3 0-2.5.5-3.3 1.3-.8.8-1.4 2-1.4 3.2V54c0 1.2.5 2.4 1.4 3.2.8.8 2 1.3 3.3 1.3h25.9c1.3 0 2.5-.5 3.3-1.3.8-.8 1.4-2 1.4-3.2V31.7c0-1.2-.5-2.4-1.4-3.2z"/></svg>
				⟶
				</div>
			</a>
		<?php endif ?>
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
</article><!-- #post-## -->
