<?php get_header(); ?>

<img id="sb_news_img" src="<?php bloginfo("stylesheet_directory"); ?>/img/quick_facts.gif">

	<div id="primary">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #primary -->
	
<?php get_footer(); ?>