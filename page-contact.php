<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<div id="banner">
	<img src="<?php getHeaderImage(get_the_title()); ?>" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" />
</div>

<div id="content_background">
	<div id="container">

<?php get_sidebar(); ?>

<div id="content_header">
	<h2>Contact Us</h2>
</div>

<div id="primary">
	<div id="page_row">
		<div id="page_left">
			<p>Shoot us an <b>Email</b></p>
		</div>
		<div id="page_right">
			<p>Thanks for your interest in contacting Team Middlebury!  Please use the form below to place an inquiry, or contact us the old fashioned way.  We do get a lot of mail, so it may take a while for us to reply to your message.  Please be patient</p>
		</div>
	</div>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>
	<div id="content_header">
	<h2>Alternative Addresses</h2>
	</div>
	
	<div id="page_row">
		<div id="page_left">
			<p>Contact <b>Us:</b></p>
		</div>
		<div id="page_right">
			<p>middsd@middlebury.edu</p>
		</div>
	</div><div id="page_row">
		<div id="page_left">
			<p>Drop us a <b>Line:</b></p>
		</div>
		<div id="page_right">
			<p>Middlebury Solar Decathlon<br/>
			14 Old Chapel Road<br/>
			Middlebury, VT 05753</p>
		</div>
	</div>
</div><!-- #primary -->
<?php get_footer(); ?>