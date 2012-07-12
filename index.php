<?php get_header(); ?>

<div id="banner">
	<img src="<?php getHeaderImage('news'); ?>" alt="News" title="News" />
</div>

<div id="content_background">
	<div id="container">
		
<?php get_sidebar(); ?>

<div id="loop_header">
	<h2><?php wp_title(''); ?></h2>
</div>
<div id="posts">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="post">
		<div class="post_author">
			<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
		</div>
		<div class="post_content">
			<h2 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_content(); ?>
			</div>
			<p class="postmetadata">Posted in <?php the_category(', '); ?></p>
		</div>
	</div>
<?php endwhile; ?>
<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
<?php else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</div>
<?php get_footer(); ?>