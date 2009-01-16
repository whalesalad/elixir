<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title><?php bloginfo('name'); ?><?php if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) { ?> &raquo; <?php wp_title(''); ?><?php } ?></title>

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /><!-- Michael Whalen Loves Elan Zelenka -->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
	
</head>

<body>
<div id="upperBar"></div>

<div id="wrapper">