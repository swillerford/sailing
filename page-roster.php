<?php
/*
Template Name: Roster
*/
?>

<?php get_header(); ?>

<img id="banner" src="<?php bloginfo("stylesheet_directory") ;?>/img/banners/race.jpg">

<div id="content">

	<?php get_sidebar(); ?>
	
	<img class="info_right" src="<?php bloginfo("stylesheet_directory"); ?>/img/quick_facts.png">
	<div class="primary">
		
		<a href="<?php bloginfo("url"); ?>/race"><div class="content_header">Overview</div></a>
		<a href="<?php bloginfo("url"); ?>/race/roster"><div class="content_header" id="active">Roster</div></a>
		<a href="<?php bloginfo("url"); ?>/race/calendar"><div class="content_header">Calendar</div></a>
		
		<?php
		$year=date("Y");
		$todays_date=date("Y-m-d");
		$today=strtotime($todays_date);
		$grad=strtotime($year-06-31);
		$febgrad=strtotime($year-02-07);
		$start=strtotime($year-09-01);
		if ($today>$grad){
			$alums=$year+0.1;
		}
		elseif($today>$febgrad & $today<$grad){
			$alums=$year-0.3;
		}
		else{
			$alums=$year-0.9;
		};
		echo do_shortcode('[pdb_list filter="class>'.$alums.'"]');
		?>

	</div><!-- #primary -->
</div> <!-- Content -->

<?php get_footer(); ?>