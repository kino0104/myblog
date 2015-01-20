	<?php get_header(); ?>
	<div class="row">
	<div id="content" class="col-sm-9">
		<!-- post -->
		<?php if(have_posts()):
		while(have_posts()): the_post(); ?>
			<div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

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

	</div><!-- content -->
	<?php get_sidebar(); ?>
	</div><!-- row -->
	<?php get_footer(); ?>