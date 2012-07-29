<?php
/*
Template Name: Race Overview
*/
?>

<?php get_header(); ?>

<img id="banner" src="<?php bloginfo("stylesheet_directory") ;?>/img/banners/race.jpg">

<div id="content">

	<?php get_sidebar(); ?>
	
	<img class="info_right" src="<?php bloginfo("stylesheet_directory"); ?>/img/quick_facts.png">
	<div class="primary">
		
		<a href="<?php bloginfo("url"); ?>/race"><div class="content_header" id="active">Overview</div></a>
		<a href="<?php bloginfo("url"); ?>/roster"><div class="content_header">Roster</div></a>
		<a href="<?php bloginfo("url"); ?>/calendar"><div class="content_header">Calendar</div></a>
		
		<?php while(have_posts()):the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
	</div><!-- #primary -->
</div> <!-- Content -->

<?php get_footer(); ?>
