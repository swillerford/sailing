<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>InSite | Middlebury College</title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet" type="text/css"> 	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" media="all" />
	
	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/libs/jquery.js" ></script>
	<script type="text/javascript" src="<?php bloginfo("stylesheet_directory"); ?>/js/script.js" ></script>
	<script type="text/javascript">
	
	</script>
	<?php wp_head(); ?> 
</head>
<body <?php if(is_front_page()){ echo 'class="fp-body"';} ?>>
	<div id="header">
		<a href="/">
			<img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.png" id="logo">
		</a>
		<div id="main_nav">
			<a id="friends" class="nav-button" href="/friends">
				Friends & Alumni
			</a>
			<a id="media" class="nav-button" href="/media">
				Media
			</a>
			<a id="rec-pe" class="nav-button" href="/rec-pe">
				Rec & PE
			</a>
			<a id="race" class="nav-button" href="/race">
				Racing
			</a>
			<a id="about" class="nav-button" href="/about">
				About Us
			</a>
			<a id="news" class="nav-button" href="/news">
				News
			</a>
		</div><!-- main_nav -->
	</div><!-- header -->