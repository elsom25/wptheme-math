<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('title'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
	<link rel='alternate' type='application/rss+xml' title='Posts' href='<?php bloginfo('rss2_url'); ?>'>
	<link rel='alternate' type='application/rss+xml' title='Comments' href='<?php bloginfo('comments_rss2_url'); ?>'>
	<script type="text/javascript" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
</head>
<body>
<div id="wrap">

	<div id="header">
		<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
		<span><?php bloginfo('description'); ?></span>
		<div class='search'><?php //get_search_form(); ?></div>
	</div>
	
	<div id="topnav">
		<ul>
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</div>
	<div id="content">
