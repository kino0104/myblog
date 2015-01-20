	<?php get_header(); ?>
	<div class="row">
	<div id="content" class="col-sm-9">
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
				<?php the_content('続きを読む &raquo;'); ?>
			</div>
		<?php
		endwhile;
		else: ?>
		<div class="post">
			<h2>記事はありません</h2>
			<p>お探しの記事は見つかりませんでした。</p>
		</div>
		<?php endif; ?>

		<!-- /post -->
		<!-- pager -->
		<nav>
			<ul class="pager">
				<li class="previous"><?php next_posts_link2('Older'); ?></li>
				<li class="next"><?php previous_posts_link2('Newer'); ?></li>
			</ul>
		</nav>
		<!-- /pager -->
	</div><!-- content -->
	<?php get_sidebar(); ?>
	</div><!-- row -->
	<?php get_footer(); ?>