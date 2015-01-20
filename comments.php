<div id="comment-area">
	<?php if(have_comments()): ?>
	<h3 id="comments">Comment</h3>
	<ol class="comments-list">
		<?php wp_list_comments('avatar_size=55'); ?>
	</ol>
	<div class="comment-page-link">
			<?php paginate_comments_links(); //コメントが多い場合、ページャーを表示 ?>
	</div>
	<?php endif; ?>
	<!-- /comment -->

	<!-- comment form -->
<?php $args = array(
'title_reply' => 'Leave a Reply',
'label_submit' => 'Submit Comment',
);
comment_form($args); ?>
	<!-- /comment form -->
</div>