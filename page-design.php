<?php 
/*
 * Template Name: Design Page
 */
?>


<?php get_header(); ?>

<div id="banner">
	<img src="<?php getHeaderImage(get_the_title()); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
</div>

<div id="content_background">
	<div id="container">

<div id="design_header">
	<p><i>Click on one of the links below to learn more</i></p>
</div>

<div id="design_links"> <!-- Links need to be updated before final push -->
	<a href="/design"><div id="design_link" class="design"></div></a>
	<a href="/materials"><div id="materials_link" class="design"></div></a>
	<a href="/engineering"><div id="engineering_link" class="design"></div></a>
</div>

<div id="primary" class="full-page">
	<img src="<?php bloginfo("stylesheet_directory"); ?>/img/design/Design_Design%20Picture.png" id="design_left">
	<div id="design_right">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div>
</div><!-- #primary -->

<?php get_footer(); ?>