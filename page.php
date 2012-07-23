<?php get_header(); ?>

<div id="slideshow">
</div>

<div id="content">

	<?php get_sidebar(); ?>
	
	<div class="primary">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #primary -->
</div> <!-- Content -->

<?php get_footer(); ?>