<?php
/**
 * Comments Template
 *
 * Controls display of comments on single blog posts and pages
 * (if pages have comments enabled). Called from `single.php`
 * with the `comments_template()` method.
 *
 * Documentation:
 * https://developer.wordpress.org/reference/functions/comments_template/
 */
?>

<section class="mt-5">
	<h1 class="h3">
		<?php comments_number('No comments yet', '1 comment', '% comments'); ?>
	</h1>
	
	<?php if (have_comments()) : ?>
		<ul class="list-unstyled" id="comment-list">
			<?php wp_list_comments(); ?>
		</ul>
	<?php endif; ?>
</section>

<?php
$args = array(
	'class_form' => 'form-comment',
	'class_submit' => 'btn btn-primary mt-3',
	'label_submit' => __('Submit'),
	'title_reply' => __('Leave a Reply'),
	'title_reply_before' => '<h3 class="comment-reply-title mt-3 pt-3">',
	'title_reply_after' => '</h3>',
	'comment_field' => '<label for="comment">' . _x('Comment', 'noun') . '</label><textarea aria-required="true" class="form-control" id="comment" name="comment"></textarea>',
	'comment_notes_before' => null,
	'comment_notes_after' => null,
	'fields' => apply_filters('comment_form_default_fields', $fields)
);

comment_form($args);