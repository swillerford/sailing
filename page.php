<?php get_header(); ?>

<div id="slideshow">
	<a href="<?php bloginfo('url'); ?>/friends/" class="slideshow_image" id="banner1"></a>
	<a href="<?php bloginfo('url'); ?>/recpe/" class="slideshow_image" id="banner2"></a>
	<a href="<?php bloginfo('url'); ?>/race/" class="slideshow_image" id="banner3"></a>
</div>

<div id="content">

	<?php get_sidebar(); ?>
	
	<img class="info_right" src="<?php bloginfo("stylesheet_directory"); ?>/img/quick_facts.png">
	
	<div class="primary">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #primary -->
</div> <!-- Content -->

<?php get_footer(); ?>