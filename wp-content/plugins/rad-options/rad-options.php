<?php 
/*
Plugin Name: Company Info Settings
Author: Baron Watts
Plugin URI: http://plugin-support-site.com
Description: Update your company info
Author URI: http://merissagarcia.com
License: GPLv3
Version: 0.1
*/


/**
 * Add a page to the admin
 */

add_action('admin_menu', 'rad_options_page' );
function rad_options_page(){
	add_options_page('Company Information', 'Company Info', 'manage_options', 'compnay-info', 'rad_options_html');
}

//callback for content
function rad_options_html(){
	//security check!

	if(current_user_can('manage_options')){
		//include the form
		//includes doesn't work with www. only files!
		include(plugin_dir_path(__FILE__) . 'rad-form.php');
	}else{
		wp_die('You do not have permission to see this page');
	}
}//end function



/**
 * Create a group of options that are allowed in the options table
 */
add_action('admin_init', 'rad_create_settings');
function rad_create_settings(){
					//Group Name   		Database row name 	sanitizing function
	register_setting('rad_options_group', 'rad_options', 'rad_opt_sanitize');

}//end function

function rad_opt_sanitize($input){
	$clean['phone'] = wp_filter_nohtml_kses($input['phone'] );
	$clean['email'] = wp_filter_nohtml_kses($input['email'] );

	$allowed_tags = array( 
		'br' => array(), 
		'p' => array(),
		);
	$clean['address'] = wp_kses($input['address'], $allowed_tags );



	return $clean;

}//end function


/**
 * SHORTCODES!!!
 */

//make [phone] shortcode
add_shortcode('phone', 'rad_short_phone' );
function rad_short_phone(){
	$values = get_option('rad_options');
	return  '<b>' . $values['phone'] . '</b>';
}


//make [email] shortcode
add_shortcode('email', 'rad_short_email' );
function rad_short_email(){
	$values = get_option('rad_options');
	return  '<b>' . $values['email'] . '</b>';
}









