<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">

	<title><?php bloginfo('name'); ?> - <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script><![endif]-->
	
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>
<body <?php body_class();?>>

<div class="wrap">

	<header class="header" role="banner">
	
		<hgroup>
			<h1><a href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php bloginfo('description'); ?></h2>
		</hgroup>
		
		<?php get_search_form(); ?>
	
		<nav class="nav" role="navigation">
		
			<?php wp_nav_menu( array( 'container' => '', ) ); ?>
	
		</nav>	
	
	</header> 	

	<div class="content">
	