<?php
/**
 * WordPres Command Line Interface Script
 *
 * @package WordPress
 */

if (php_sapi_name() != 'cli') {
    exit('Service Unavailable');
}

require( dirname( __FILE__ ) . '/wp-load.php' );

echo get_bloginfo();
