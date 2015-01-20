<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.6.0/build/cssreset/cssreset-min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
  <?php if(is_singular()) wp_enqueue_script("comment-reply"); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid">
	<div id="header" class="row">
		<div class="col-xs-12">
			<h1 id="logo"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
			<p id="description"><?php bloginfo('description'); ?></p>
		</div>

		
		<!-- Navigation -->
		<div class="col-sm-9 col-xs-7">
		<nav class="navbar navbar-default clear">
			<nav class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".target">
					<div class="m-icon-bar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</div>
					<div class="m-icon-text">
					<span>Menu</span>
					</div>
				</button>
			</nav>
		<?php wp_nav_menu(array(
			'theme_location' => 'primary',
			'menu_class' => 'nav navbar-nav',
			'container_class' => 'navbar-collapse collapse target',
			'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
			'walker' => new wp_bootstrap_navwalker())
			); ?>
		</nav>
		</div>
<!--
			<div class="collapse navbar-collapse target">
				<ul class="nav navbar-nav">
					<li><a href="#">about</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">cording<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">HTML</a></li>
							<li><a href="#">CSS</a></li>
							<li><a href="#">JavaScript</a></li>
						</ul>
					</li>
					<li><a href="#">design</a></li>
					<li><a href="#">contact</a></li>
				</ul>
			</div>
		</nav>
		</div>
-->
		<div class="col-sm-3 col-xs-5">
			<?php get_search_form(); ?>
		</div>
	</div><!-- header -->