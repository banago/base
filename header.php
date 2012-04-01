<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
		
	<title><?php bloginfo('name'); ?> - <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>
<body>

<div class="wrap">

	<header class="header" role="banner">
	
		<hgroup>
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<em><?php bloginfo('description'); ?></em>
		</hgroup>
		
		<?php get_search_form(); ?>
	
		<nav class="nav" role="navigation">
		
			<?php wp_nav_menu( array( 'container' => '', ) ); ?>
	
		</nav>	
	
	</header> 	

	<div class="content">
	