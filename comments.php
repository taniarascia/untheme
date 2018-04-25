<?php
/**
 * The template for displaying comments
 * 
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	if ( have_comments() ) : ?>
		<h2 class="comments-title">Comments</h2>

		<?php the_comments_navigation(); ?>

		<ul class="comment-list">
			<?php
			wp_list_comments( array(
				'short_ping' => true,
			) );
			?>
		</ul>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments">Comments are closed</p>
		<?php
		endif;

	endif;

	comment_form();
	?>

</div>