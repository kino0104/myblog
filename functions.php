<?php
	//メインコンテンツのコンテンツ幅を指定
	if ( ! isset( $content_width ) ) $content_width = 600;
	
	//サイドバー登録
    register_sidebar(array(
	'name' => 'サイドバーウィジェット-1',
	'id' => 'sidebar-1',
	'description' => 'サイドバーのウィジェットエリアです。',
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget' => '</div>',
	));
	
	//Bootstrap navigation
	require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
	) );
	
	if(!is_admin()){
		function register_script(){
			wp_register_script(
			'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery')
			);
		}
		function add_script(){
			register_script();
			wp_enqueue_script('bootstrap');
		}
		add_action('init', 'add_script', 10);
	}
	
	next_posts_link(__('<span aria-hidden="true"></span>', 'myblog'));
	
	//<head>内にRSS2フィードリンク表示
	add_theme_support('automatic-feed-links');

function get_next_posts_link2( $label = null, $max_page = 0 ) {
	global $paged, $wp_query;

	if ( !$max_page )
		$max_page = $wp_query->max_num_pages;

	if ( !$paged )
		$paged = 1;

	$nextpage = intval($paged) + 1;

	if ( null === $label )
		$label = __( 'Next Page &raquo;' );

	if ( !is_single() && ( $nextpage <= $max_page ) ) {
		$attr = apply_filters( 'next_posts_link_attributes', '' );
		return '<a href="' . next_posts( $max_page, false ) . "\" $attr>". '<span aria-hidden="true">&larr;</span>' . preg_replace('/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label) . '</a>';
	}
}


function next_posts_link2( $label = null, $max_page = 0 ) {
	echo get_next_posts_link2( $label, $max_page );
}

function get_previous_posts_link2( $label = null ) {
	global $paged;

	if ( null === $label )
		$label = __( '&laquo; Previous Page' );

	if ( !is_single() && $paged > 1 ) {
		$attr = apply_filters( 'previous_posts_link_attributes', '' );
		return '<a href="' . previous_posts( false ) . "\" $attr>". preg_replace( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label ) . '<span aria-hidden="true">&rarr;</span></a>';
	}
}

function previous_posts_link2( $label = null ) {
	echo get_previous_posts_link2( $label );
}
?>