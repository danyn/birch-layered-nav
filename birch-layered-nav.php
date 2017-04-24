<?php
/*
Plugin Name: Birch Layered Nav
Plugin URI:  https://github.com/danyn/birch-layered-nav
Description: Extends the Woocoomerce layered nav widget to include a category filter and passes more information in the urls of variable products
Version:     0.1.0
Author:      Daniel Eisen
Author URI:  https://www.linkedin.com/in/daniel-eisen-21698b100/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Check if WooCommerce is active
 **/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    	
	//initialize the widget
	add_action( 'widgets_init', function(){
		require 'birch-layered-nav-extend.php';
		require 'birch-layered-nav-js.php';
		require 'birch-layered-nav-css.php';
		
		register_widget( 'Birch_Layered_Nav' );
		
	});  

	//write all necessary assets js, css into the head when widget is active and viewing a product category
	add_action('wp_head','add_birch_layered_nav'); 


	function add_birch_layered_nav(){
		if (is_active_widget( false, false, 'birch_layered_nav', true ) && is_product_category() ){
				birch_layered_nav_js();
				birch_layered_nav_css();
		}//if active and products shown as archive
	}
}//check if WooCommerce is Active
