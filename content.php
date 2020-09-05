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
<div id="page" class="site">

<div class="site-content-container"><!--main-->

		
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<section class="entry-header">
		<?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'ptype' ) );
		}
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		endif;
		?>
	</section><!-- .entry-header -->
	
	
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'ptype' ) ); ?>
			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-link"><span>' . __( 'Pages:', 'ptype' ) . '</span>',
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>

		<section class="entry-meta">
			<?php $show_sep = false; ?>
			<?php if ( is_object_in_taxonomy( get_post_type(), 'category' ) ) : // Hide category text when not supported ?>
				<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'ptype' ) );
				if ( $categories_list ) :
					?>
			
			
			
			
			
			
				<?php endif; // End if categories ?>
			<?php endif; // End if is_object_in_taxonomy( get_post_type(), 'category' ) ?>
			<?php if ( is_object_in_taxonomy( get_post_type(), 'post_tag' ) ) : // Hide tag text when not supported ?>
				<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'ptype' ) );
				if ( $tags_list ) :
					if ( $show_sep ) :
						?>
			<span class="sep"> | </span>
					<?php endif; // End if $show_sep ?>
			<span class="tag-links">
					<?php
					printf( __( '<span class="%1$s">Tagged</span> %2$s', 'ptype' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
					$show_sep = true;
					?>
			</span>
				<?php endif; // End if $tags_list ?>
			<?php endif; // End if is_object_in_taxonomy( get_post_type(), 'post_tag' ) ?>

			<?php if ( comments_open() ) : ?>
				<?php if ( $show_sep ) : ?>
			<span class="sep"> | </span>
			<?php endif; // End if $show_sep ?>
			<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'ptype' ) . '</span>', __( '<b>1</b> Reply', 'ptype' ), __( '<b>%</b> Replies', 'ptype' ) ); ?></span>
			<?php endif; // End if comments_open() ?>

			<?php edit_post_link( __( 'Edit', 'ptype' ), '<span class="edit-link">', '</span>' ); ?>
		</section><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->



</div><!--End of Content Area-->