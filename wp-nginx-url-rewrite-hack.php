<?php
/*
Plugin Name: Nginx URL Rewrite Hack for WordPress
Plugin URI: http://usefulparadigm.com
Description: Pretty Permalinks with Nginx 
Version: 0.1
Author: Sukjoon Kim
Author URI: http://usefulparadigm.com
License: MIT
*/

// Remove trailing index.php form permalink
// https://josephscott.org/archives/2010/06/wordpress-pretty-permalinks-with-nginx/

add_filter( 'got_rewrite', '__return_true', 999 );

