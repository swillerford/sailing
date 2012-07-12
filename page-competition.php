<?php 
/*
 * Template Name: Competition Page
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
	<h2>What Is the Solar Decathlon?</h2>
</div>

<div id="primary">
	<div id="page_row">
		<div id="page_left">
			<p>The <b>Concept</b></p>
		</div>
		<div id="page_right">
			<p>The U.S. Department of Energy Solar Decathlon is a biennial international competition for which colleges and universities design and construct solar-powered homes.  Students aim to build homes that are affordable, energy-efficient, and aesthetically appealing.  Each home is judged in ten categories: Architecture, Market Appeal, Engineering, Communications, Affordability, Comfort Zone, Hot Water, Appliances, Home Entertainment, and Energy Balance.  The Department of Energy (DOE) has selected 20 designs for its 2013 competition, which will take place in Orange County Great Park in Irvine, California.</p>
		</div>
	</div>
	<div id="page_row">
		<div id="page_left">
			<p>The <b>Competition</b></p>
		</div>
		<div id="page_right">
			<p>The first Solar Decathlon was held in 2002; the competition has since occurred biennially in 2005, 2007, 2009, and 2011.  The next event will take place Oct. 3-13, 2013 at Orange County Great Park in Irvine, California.  The competition houses will be open to visitors on eight days over two weekends.  Public hours will be from 11 a.m. to 7 p.m. daily:</p>
			<ul>
				<li>Thursday, Oct. 3-Sunday, Oct. 6, 2013</li>
				<li>Thursday, Oct. 10-Sunday, Oct. 13, 2013</li>
			</ul>
		</div>
	</div>
	<div id="page_row">
		<div id="page_left">
			<p>More <b>Information</b></p>
		</div>
		<div id="page_right">
			<p>To learn more about the 2013 competition and teams, visit the <a href="http://www.solardecathlon.gov">U.S. Department of Energy Solar Decathlon Website.</a></p>
		</div>
	</div>
</div><!-- #primary -->

<?php get_footer(); ?>