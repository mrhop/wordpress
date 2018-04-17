<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage erzen
 * @since Erzen 
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
		<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx('<h3>%1$s Comment found','%1$s comments found</h3>',	$comments_number, 'comments title',	'erzen' ),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
		?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="media wow fadeInUp">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
					'callback' => 'erzen_comments',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'erzen' ); ?></p>
	<?php endif; ?>
	
	<?php 
		$req      = esc_html(get_option( 'require_name_email' ));
		$aria_req = ( $req ? " aria-required='true'" : '' );

		$comments_args = array
		(
			'label_submit' => __( 'Submit Comment', 'erzen' ),
			'title_reply'  => __( 'Leave a comment', 'erzen'  ),
			'comment_notes_after' => '',
			'comment_field' =>  
				'<textarea id="comment" name="comment" placeholder="' . esc_attr__( 'Comment here', 'erzen' ) . '" cols="45" rows="8" aria-required="true" '. $aria_req . '>' .
				'</textarea>',
			'fields' => apply_filters( 'comment_form_default_fields', array (
				'author' =>	'<div class="col-md-6 auth">'.				
					'<input id="author" name="author" placeholder="' . esc_attr__( 'Your Name (Required)&hellip;', 'erzen' ) . '" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30"' . $aria_req . ' /></div>',
				'email' =>'<div class="col-md-6">'.
					'<input id="email" name="email" placeholder="' . esc_attr__( 'Your Email (Required)&hellip;', 'erzen' ) . '" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' /></div>',
				
			) ),
		);
		?>
		<div class="comment_form wow fadeInUp"> 
			<?php
			comment_form($comments_args);
			?>
		</div>

</div><!-- .comments-area -->
