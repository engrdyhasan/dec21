<?php
/**
 * The template file for displaying the comments and comment form for the
 * RADY theme.
 *
 * @package WordPress
 * @subpackage RADY
 * @since RADY 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/

if ( comments_open() || pings_open() ) {					?>
	<h3 class="comments-count"><?php comments_number('no comments', '1 comment', '% comments') ?></h3>;
	<?php 
	echo '<ul class="list-unstyled comment-list">';
	$comments_arguments = array (
		'max_depth' => 5,
		'type' => 'comment',
		'avatar_size' => 64
	);
	wp_list_comments($comments_arguments);
	echo '</ul>';
	echo '<hr class="comment-separator">';
	$commentform_arguments = array(
		'title_reply' 						=> 'Add Your Comment',
		'title_reply_to' 					=> 'Add a reply to [%s]',
		'class_sumbit' 						=> 'btn btn-primary btn-md',
		'Comment_notes_before' 		=> ''
	);
	comment_form($commentform_arguments);
}else{
	echo 'Sorry , comments are disabled';
}
/*
if ( post_password_required() ) {
	return;
}

if ( $comments ) {
	?>

	<div class="comments" id="comments">

		<?php
		$comments_number = absint( get_comments_number() );
		?>

		<div class="comments-header section-inner small max-percentage">

			<h2 class="comment-reply-title">
			<?php
			if ( ! have_comments() ) {
				_e( 'Leave a comment', 'RADY' );
			} elseif ( 1 === $comments_number ) {
				/* translators: %s: Post title. *//*
				printf( _x( 'One reply on &ldquo;%s&rdquo;', 'comments title', 'RADY' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. *//*
					_nx(
						'%1$s reply on &ldquo;%2$s&rdquo;',
						'%1$s replies on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'RADY'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}

			?>
			</h2><!-- .comments-title -->

		</div><!-- .comments-header -->

		<div class="comments-inner section-inner thin max-percentage">

			<?php
			wp_list_comments(
				array(
					'walker'      => new RADY_Walker_Comment(),
					'avatar_size' => 120,
					'style'       => 'div',
				)
			);

			$comment_pagination = paginate_comments_links(
				array(
					'echo'      => false,
					'end_size'  => 0,
					'mid_size'  => 0,
					'next_text' => __( 'Newer Comments', 'RADY' ) . ' <span aria-hidden="true">&rarr;</span>',
					'prev_text' => '<span aria-hidden="true">&larr;</span> ' . __( 'Older Comments', 'RADY' ),
				)
			);

			if ( $comment_pagination ) {
				$pagination_classes = '';

				// If we're only showing the "Next" link, add a class indicating so.
				if ( false === strpos( $comment_pagination, 'prev page-numbers' ) ) {
					$pagination_classes = ' only-next';
				}
				?>

				<nav class="comments-pagination pagination<?php echo $pagination_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>" aria-label="<?php esc_attr_e( 'Comments', 'RADY' ); ?>">
					<?php echo wp_kses_post( $comment_pagination ); ?>
				</nav>

				<?php
			}
			?>

		</div><!-- .comments-inner -->

	</div><!-- comments -->

	<?php
}

if ( comments_open() || pings_open() ) {

	if ( $comments ) {
		echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
	}

	comment_form(
		array(
			'class_form'         => 'section-inner thin max-percentage',
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		)
	);

} elseif ( is_single() ) {

	if ( $comments ) {
		echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
	}

	?>

	<div class="comment-respond" id="respond">

		<p class="comments-closed"><?php _e( 'Comments are closed.', 'RADY' ); ?></p>

	</div><!-- #respond -->

	<?php
}
*/
