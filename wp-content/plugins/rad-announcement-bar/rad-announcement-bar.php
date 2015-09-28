<?php 
/*
Plugin Name: Product Post type and Taxonomy
Author: Merissa Garcia
Plugin URI: http://plugin-support-site.com
Description: Creates products with brands and features
Author URI: http://merissagarcia.com
License: GPLv3
Version: 0.1
*/


/**
 * Add HTML Output to the bottom of every page
 */

//adds to the hook of wp footer
add_action('wp_footer', 'rad_bar_html');

function rad_bar_html(){
	//only show on home page
	if(is_front_page()):
	?>
	<!--Rad Announcement Bar by Baron Watts -->
	<!-- begin writing HTML -->

	<div id="rad-announcement-bar">
		<span>This is a really important announcement! <a href="#">Click Here!</a></span>
	</div>

	<?php //start php again
	endif;
}

/**
 * Attach style sheet
 */

add_action('wp_enqueue_scripts', 'rad_bar_styles');
function rad_bar_styles(){
	//only show on home page
	if(is_front_page()):
	//get url
	$url = plugins_url('css/rad-announcement-style.css', __FILE__ );

	//put it on the page
	wp_enqueue_style('rad-bar-style', $url );
	endif;

}




//no close php
