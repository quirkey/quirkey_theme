<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/mate.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="http://feeds.feedburner.com/quirkey" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php wp_head(); ?>
</head>
<body>
<div id="container">
<div id="logo">
<a href="<?php echo get_settings('home'); ?>/">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/qbloglogo.gif" alt="QuirkeyBlog" /></a>
<?php get_sidebar(); ?>
</div>
<div id="page">
<div id="header">
		<h1><a href="<?php echo get_settings('home'); ?>/">Quirkey<span class="page_title">Blog</span></a></h1>
			<?php /*<div id="flickr">
				<ul><?php get_flickrrss(5, "user", "", "square", "<li>", "</li>", "32169282@N00"); ?></ul><br />
				<div class="clear">&nbsp;</div>
			</div> */ ?>
			
	<!-- 	<div class="description"><?php witty(); ?></div> -->
</div>


