<?php
/*
	Plugin Name: Hide Dashboard
	Plugin URI: https://ithemes.com
	Description: Rename the WordPress Dashboard access URLs
	Version: 0.0.2
	Text Domain: hide-dashboard
	Domain Path: /languages
	Author: iThemes.com
	Author URI: https://ithemes.com
	License: GPLv2
	Copyright 2014  iThemes  (email : info@ithemes.com)
*/

if ( ! class_exists( 'Hide_Dashboard' ) ) {

	require( dirname( __FILE__ ) . '/inc/class-hide-dashboard.php' );
	new Hide_Dashboard( __FILE__ );

}