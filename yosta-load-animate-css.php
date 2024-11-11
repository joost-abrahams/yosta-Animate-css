<?php
/*
Plugin Name: Yosta Load Animate css
Description: Load Animate.css in WordPress
Version: 0.1
Author: Joost Abrahams
Author URI: https://mantablog.nl
GitHub Plugin URI: https://github.com/joost-abrahams/yosta-Animate-css/
Source  https://animate.style/
License: GPLv3
*/

// Exit if accessed directly
defined( 'ABSPATH' ) or die;

//declare complianz with consent level API
$plugin = plugin_basename( __FILE__ );
add_filter( "wp_consent_api_registered_{$plugin}", '__return_true' );

// Happy hacking

add_action( 'wp_enqueue_scripts', 'yosta_enqueue_animate_styles' );
function yosta_enqueue_animate_styles() {
	wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
}
