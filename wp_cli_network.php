<?php
/**
 * WordPres Command Line Interface Script for Network
 * 
 * @package WordPress
 */

if (php_sapi_name() != 'cli') {
    exit('Service Unavailable');
}

$_SERVER['HTTP_HOST'] = 'www.example.com';

require( dirname( __FILE__ ) . '/wp-load.php' );

echo get_bloginfo();
