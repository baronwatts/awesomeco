<?php 
/*
Plugin Name: Products Custom Post Type
Description: Adds the ability to have a product catalog
Author: Baron Watts
Version: 0.1
LicenseL GPLv3
*/

/**
 * Register 'Product' pst type
 */
add_action('init', 'rad_setup_products' );
function rad_setup_products(){
	/*no capital letters, spaces or special characters in the CPT name*/
	register_post_type('product', array(
		'public' => true,
		'has_archive' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-cart',
		'supports' => array('title','editor','thumbnail','custom-fields','revisions','excerpt'),
		'labels' => array(
			//These will show uo in the admin panel
			'name' => 'Products',
			'singular_name' => 'Product',
			'add_new_item' => 'Add New Product',
			'not_found' => 'No Products Found',
		),


	));

	//add the taxonomy - brand
	register_taxonomy('brand', 'product', array(
			'hierarchical' => 'true', //checklist interface, and acts like categories
			'show_admin_column' => 'true', // makes the brand appear in the edit products list
			'labels' => array(
				'name' => 'Brands',
				'singular_name' => 'Brand',
				'add_new_item' => 'Add New Brand',
				'search_items' => 'Search Brands',
				),

		));

	//add the feature taxonomy to products
	register_taxonomy('feature', 'product', array(
			'hierarchical' => 'false', //checklist interface, and acts like categories
			'show_admin_column' => 'true', // makes the brand appear in the edit products list
			'sort' => 'true', //preserve the order that the terms are added
			'labels' => array(
				'name' => 'Features',
				'singular_name' => 'feature',
				'add_new_item' => 'Add New feature',
				'search_items' => 'Search features',
				),

		));

}//end rad setup products

/**
 * fix 404 erros when the plugin activares
 @since 0.1
 */

function rad_rewrite_flush(){
	//setup the product and taxos first
	rad_setup_products();
	//then fix htaccess file
	flush_rewrite_rules();
}

//hook the function __FILE__ means 'this'
register_activation_hook(__FILE__, 'rad_rewrite_flush' );
















//no close php
 ?>