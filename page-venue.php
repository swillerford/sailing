<?php
/*
Template Name: Venue
*/
?>

<?php get_header(); ?>

<img id="banner" src="<?php bloginfo("stylesheet_directory") ;?>/img/banners/about.jpg">

<div id="content">

	<?php get_sidebar(); ?>
	
	<img class="info_right" src="<?php bloginfo("stylesheet_directory"); ?>/img/dunmore_map.jpg">
	<div class="primary">
		
		<a href="/sailing/wordpress/club-overview"><div class="content_header">Club Overview</div></a>
		<a href="/sailing/wordpress/our-venue"><div class="content_header" id="active">Our Venue</div></a>
		<a href="/sailing/wordpress/our-history"><div class="content_header">Our History</div></a>
		
		<?php while(have_posts()):the_post(); ?>
		<?php the_content();?>
		<?php endwhile; ?>
	</div><!-- #primary -->
</div> <!-- Content -->

<?php get_footer(); ?>