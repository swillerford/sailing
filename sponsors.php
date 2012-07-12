<?php
/*
Template Name: Sponsors
*/
?>

<?php get_header(); ?>

<div id="banner">
	<img src="<?php getHeaderImage(get_the_title()); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
</div>

<div id="content_background">
	<div id="container">

<?php get_sidebar(); ?>

		<div id="primary">
			<p>Interesting in sponsoring Team Middlebury? <a href="/contact">Contact us for more information.</a></p>
			
			<h2>Sponsors</h2>
			<div id="content" role="main">
			<div id="sponsors">
			<?php foreach($sponsors as $s) { ?>
			<a class="sponsor" href="<?php echo $s['url']; ?>"><?php echo $s['name']; ?></a>
			<?php } ?>

			<div class="clear"></div>
			</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>