<?php
function get_random_gallery_images(){
	global $wpdb,$post;
		$ids = "";
		$counter = 0;
		$number_of_posts = 2;
		$args = array(
		'post_type' => 'attachment',
		'numberposts' => 2,
		'post_status' => null,
		'orderby' => 'rand',
		'post_parent' => $post->ID
		);
		$attachments = get_posts($args);
		if ($attachments) {
			foreach ($attachments as $attachment) {

				if ($counter != 0) {
					$ids .= ','.$attachment->ID;
				}
				else {
					$ids .= $attachment->ID;
				}
				$counter++;
			}
		}
		return $ids;
}
function get_screen_res(){
$width = $_GET['width'];
$height = $_GET['height'];

echo "$width x $height";
}
?> 