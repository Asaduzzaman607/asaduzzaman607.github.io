<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CVitae
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

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php

				if( get_comments_number() > 1 ){
					printf( esc_html__( 'Comments (%s)', 'cvitae' ), get_comments_number() );
				} else {
					printf( esc_html__( 'Comment (%s)', 'cvitae' ), get_comments_number() );
				}

			?>
		</h2>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'cvitae' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'cvitae' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'cvitae' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'cvitae' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'cvitae' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'cvitae' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().

	?>

</div><!-- #comments -->

<?php

// If comments are closed and there are comments, let's leave a little note, shall we?
if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'cvitae' ); ?></p>
<?php

endif;

$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

$fields =  array(

	'author' =>
		'<div class="row"><div class="col s6"><div class="form-input"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' placeholder="' . esc_attr( "your name *", 'cvitae' ) . '" required/><span class="underline"></span></div></div>',

	'email' =>
		'<div class="col s6"><div class="form-input"><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' placeholder="' . esc_attr( "your email *", 'cvitae' ) . '" /><span class="underline"></span></div></div></div>'

);

$comments_args = array(    
	'label_submit'        => esc_html__( 'Send', 'cvitae' ),
	'title_reply'         => esc_html__( 'Write a Reply or Comment', 'cvitae' ),
	'comment_notes_after' => '',
	'comment_field'       => '<div class="row"><div class="col s12"><div class="form-textarea"><textarea id="comment" name="comment" aria-required="true" placeholder="' . esc_attr__( "your message *", "cvitae" ) . '"></textarea><span class="underline"></span></div></div></div>',
	'fields'              => apply_filters( 'comment_form_default_fields', $fields ),
);

comment_form($comments_args);

?>