<?php
/*
Template Name: Calendar
*/
?>

<?php get_header(); ?>

<img id="banner" src="<?php bloginfo("stylesheet_directory") ;?>/img/banners/race.jpg">

<div id="content">

	<?php get_sidebar(); ?>
	
	<img class="info_right" src="<?php bloginfo("stylesheet_directory"); ?>/img/quick_facts.png">
	<div class="primary">
		
		<a href="<?php bloginfo("url"); ?>/race"><div class="content_header">Overview</div></a>
		<a href="<?php bloginfo("url"); ?>/roster"><div class="content_header">Roster</div></a>
		<a href="<?php bloginfo("url"); ?>/calendar"><div class="content_header" id="active">Calendar</div></a>
		
		<?php while(have_posts()):the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
		<iframe id="calendar" src="https://www.google.com/calendar/embed?height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=sailing%40middlebury.edu&amp;color=%232F6309&amp;ctz=America%2FNew_York" style=" border-width:0 " width="550" height="500" frameborder="0" scrolling="no"></iframe>
	</div><!-- #primary -->
</div> <!-- Content -->

<?php get_footer(); ?>
