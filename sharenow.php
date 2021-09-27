<?php
/*
Plugin Name: Share Now
Plugin URI: https://tylerjohnsondesign.com
Description: Smart social share buttons for sites.
Version: 1.0.6
Author: Tyler Johnson
Author URI: https://tylerjohnsondesign.com
Copyright: Tyler Johnson
Text Domain: tjd-sharenow
Copyright © 2020 Tyler Johnson Design. All Rights Reserved.
*/

/**
Disallow direct access to the plugin.
**/
if( !defined( 'WPINC' ) ) { die; }

/**
Constants.
**/
define( 'SHARENOW_VERSION', '1.0.6' );
define( 'SHARENOW_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'SHARENOW_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

/**
Updates.
**/
require SHARENOW_PATH . 'updates/plugin-update-checker.php';
$sharenowUpdates = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/tylerjohnsondesign/sharenow',
	__FILE__,
	'sharenow'
);
$sharenowUpdates->getVcsApi()->enableReleaseAssets();

/**
Functions.
**/
require_once( SHARENOW_PATH . 'inc/functions.php' );
