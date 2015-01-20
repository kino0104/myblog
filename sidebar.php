<div id="sidebar" class="col-sm-3">
	<?php if(is_active_sidebar('sidebar-1')) : 
	dynamic_sidebar('sidebar-1');
	else: ?>
	<div class="widget">
		<h2>No Widget</h2>
		<p>ウィジェットは設定されていません。</p>
	</div>
	<?php endif; ?>
</div><!-- sidebar -->
