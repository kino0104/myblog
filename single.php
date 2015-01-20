	<?php get_header(); ?>
	<div class="row">
	<div id="content" class="col-md-9">
		<!-- post -->
		<?php if(have_posts()):
		while(have_posts()): the_post(); ?>
			<div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p class="post-meta">
					<span class="post-date"><?php the_date(); ?></span>
					<span class="category">Category : <?php the_category(', '); ?></span>
					<span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>
				</p>
				<?php the_content(); ?>
				<?php $args = array(
				'before' => '<div class="page-link">',
				'after' => '</div>',
				'link_before' => '<span>',
				'link_after' => '/span'
				);
				wp_link_pages($args);
				?>
				<p class="footer-post-meta">
					<?php the_tags('Tag : ', ', '); ?>
					<?php if(is_multi_author()): ?>
					<span class="post-author">作成者 : <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
					<?php endif; ?>
				</p>
			</div>
		<!-- pager --><!-- single.phpではページャはループ内に記述 -->
		<nav>
			<ul class="pager">
				<li class="previous"><?php next_posts_link2('Older'); ?></li>
				<li class="next"><?php previous_posts_link2('Newer'); ?></li>
			</ul>
		</nav>
		<!-- /pager -->
		<!-- comment-area -->
		<?php comments_template(); ?>
		<!-- /comment-area -->
		<?php
		endwhile;
		else: ?>
		<div class="post">
			<h2>記事はありません</h2>
			<p>お探しの記事は見つかりませんでした。</p>
		</div>
		<?php endif; ?>
		<!-- /post -->

	</div><!-- content -->
	<?php get_sidebar(); ?>
	</div><!-- row -->
	<?php get_footer(); ?>