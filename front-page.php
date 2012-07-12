<?php get_header(); ?>
	
<div id="slideshow">
	<div id="slideshow_footer">
		<div id="slideshow_footer_bar">
			<div class="right"><a href="/design">Read more about our design here ></a></div>
			<div class="left">Early rendering of the exterior of InSite</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<div id="content_background">
	<div id="container">

<?php get_sidebar(); ?>

<div id="loop_header">
	<h2>Latest News</h2>
</div>
<div id="posts">
<?php $posts_array = get_posts( array('numberposts' => 3) ); ?> 

<?php foreach( $posts_array as $post ) : setup_postdata($post); ?>
	<div class="post">
		<div class="post_author">
			<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
		</div>
		<div class="post_content">
			<h2 class="post_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="entry">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>
<?php get_footer(); ?>