<?php get_header(); ?>

<div id="slideshow"></div>

<div id="content">

<?php get_sidebar() ;?>
	
	<div class="primary">
		<div id="loop_header">News</div>
		
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
		</div><!-- Posts -->
	</div> <!-- Primary -->
</div> <!-- Content -->

<?php get_footer(); ?>