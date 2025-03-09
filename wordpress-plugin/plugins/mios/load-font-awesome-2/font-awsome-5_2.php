<?php

/**
 * Plugin Name: Monteserín loads Font Awesome 5.2 / 2
 * Description: This plugin loads font awesome css 5.2, so you can insert font awesome codes in you page
 * Version: 1.0.0
 * Author: Pablo Monteserín
 * Author URI: https://pablomonteserin.com
 * License: GPL2
 */

add_shortcode("load_font_awesome", function () {
	wp_enqueue_style('fontawesomecss');
});

add_action('init', function () {
	wp_register_style('fontawesomecss', plugin_dir_url(__FILE__) . "includes/css/all.min.css");
});
