<?php
/*
Template Name: Friends & Alumni
*/
?>

<?php get_header(); ?>

<img id="banner" src="<?php bloginfo("stylesheet_directory") ;?>/img/banners/friends.jpg">

<div id="content">

	<?php get_sidebar(); ?>
	
	<img class="info_right" src="<?php bloginfo("stylesheet_directory"); ?>/img/quick_facts.png">
	
	<div class="primary">
		<h1>Welcome, Friends and Alumni!</h1>
		<a href="https://secure.www.alumniconnections.com/olc/pub/MDR/onlinegiving/showGivingForm.jsp?form_id=8525" target="blank"><div id="donate_button"></div></a>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #primary -->
</div> <!-- Content -->

<?php get_footer(); ?>