<?php
/**
 * WordPres Command Line Interface Script for Network
 * 
 * @package WordPress
 */

$_SERVER['HTTP_HOST'] = 'www.example.com';

require( dirname( __FILE__ ) . '/wp-load.php' );

echo get_bloginfo();
