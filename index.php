<?php
  /**
  * Theme Name: ptype
  * Theme URL: http://geekedtype.com
  * Description: This is  The main template file
  * Author: Thiru Kimana <kimstilltheman@geekedtype.com>
  * Theme Version: 0.0.1
  *	
  **/

  ?>




<?php get_header(); ?>
<main id="content">
<?php if ( have_posts() )
	: while ( have_posts() ) 
		: the_post();
	?>
 



<?php get_template_part( 'content', get_post_format() ); ?>
<?php comments_template(); ?>

 
<?php endwhile; ?>
 
<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
<?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?>
 
<?php else: ?>
 
<article id="post-0" class="post no-results not-found">
	<section class="entry-header">
			<h2 class="entry-title"><?php _e( 'Nothing Found', 'ptype' ); ?></h2>
	</section><!-- .entry-header -->

	<div class="entry-content">
		<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ptype' ); ?></p>
				<?php get_search_form(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-0 -->
 
<?php endif; ?>



</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

