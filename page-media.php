<?php
/*
Template Name: Media
*/
?>

<?php get_header(); ?>

<img id="banner" src="<?php bloginfo("stylesheet_directory") ;?>/img/banners/media.jpg">

<div id="content">

	<?php get_sidebar(); ?>
	
	<div class="sidebar_right_container">
		<div class="sidebar_right">
			<b>Copyright Information</b>
			<div class="sidebar-divider"></div>
			<p>This work by Middlebury College Sailing Club members is licensed under a <a href="http://creativecommons.org/licenses/by-nc-nd/3.0/us/">Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 United States License.</a> Feel free to download and distribute these files for your own personal use or for use in pubications; however, commercial use or manipulation of these images is strictly prohibited.</p>
			<img id="license-image" src="<?php bloginfo("stylesheet_directory") ;?>/img/license.png">
		</div>
		<div class="sidebar_right">
			<b>Screen Resolution</b>
			<div class="sidebar-divider"></div>
			<p>To assist in choosing the correct wallpaper size, here is your current screen resolution:</p>
			<script language="javascript">
				if (window.location.search == "") {
					window.location.href = window.location + "?width=" + screen.width + "&height=" + screen.height;
				}
			</script>
			<?php get_screen_res(); ?>
		</div>
	</div>
	
	<div class="primary" id="primary_media">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #primary -->
</div> <!-- Content -->

<?php get_footer(); ?>