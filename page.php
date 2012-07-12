<?php get_header(); ?>

<div id="banner">
	<img src="<?php getHeaderImage(get_the_title()); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
</div>

<div id="content_background">
	<div id="container">

<?php get_sidebar(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>