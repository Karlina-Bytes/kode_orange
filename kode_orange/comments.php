<?php
/**
 * comments.php
 * Updated by Karlina Beringer on 10 May 2015.
 *
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package kode_orange
 * The kode_orange theme is customized specifially for the Karlina Bytes website.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
  <?php if ( have_comments() ) : ?>
    <hr>
    <h3>Comments</h3>
    
    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
    <nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
    
    <div class="nav-links">
      <div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'kode_orange' ) ); ?></div>
      <div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'kode_orange' ) ); ?></div>
    </div><!-- .nav-links -->
    
    </nav><!-- #comment-nav-above -->
    <?php endif; // check for comment navigation ?>
    
    <!-- Display a (nested) list of comments -->
    <ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
    </ol><!-- .comment-list -->

    <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
    <nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
	<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'kode_orange' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'kode_orange' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'kode_orange' ) ); ?></div>

			</div><!-- .nav-links -->
    </nav><!-- #comment-nav-below -->
    <?php endif; // check for comment navigation ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed for this post.', 'kode_orange' ); ?></p>
	<?php endif; ?>

        <!-- Display the comment form -->
        <hr>
	<?php comment_form(); ?>
	<hr>

</div><!-- #comments -->