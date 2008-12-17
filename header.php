<?php global $is_home; ?>
<?php $is_home = false; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
		
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/quirkey_theme.css" type="text/css" media="screen" charset="utf-8"true>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/quirkey.css" type="text/css" media="screen" charset="utf-8"true>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mate.css" type="text/css" media="screen" />
	
	<script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/jquery.livequery.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/javascripts/quirkey.js" type="text/javascript" charset="utf-8"></script>
	
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/quirkey" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); ?>
	
</head>

<body>
	<div id="container">
		<div id="header_holder">
			<div id="header">
				<div id="logo" class="quirkey_nav_open"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Logo"/></div>
				<h1>Quirkey<a href="<?php echo get_settings('home'); ?>/" class="q_blog">Blog</a><span class="description">Various Writing.</span></h1>
        <!-- <div id="est"><em>Est. 2005</em></div> -->
				<div id="quirkey_nav" style="display: none;">
				  <h1 class="quirkey_log">Quirkey<a href="http://log.quirkey.com/" class="q_log">Log</a><span class="description">Up-to-the-minute updates from the interweb.</span></h1>
				  <h1 class="quirkey_blog">Quirkey<a href="http://portfolio.quirkey.com/" class="q_portfolio">Portfolio</a><span class="description">Selected Work.</span></h1>
				  <h1 class="quirkey_com">Quirkey<a href="http://www.quirkey.com" class="q_com">.com</a><span class="description">The Lobby; General Information.</span></h1>
				</div>
			</div>
			<div class="quirkey_nav_close" style="display:none;"><a href="#">^</a></div>
		</div>
		<div id="main">