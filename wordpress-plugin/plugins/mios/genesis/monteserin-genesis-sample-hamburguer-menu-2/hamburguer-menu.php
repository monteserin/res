<?php 
/**
 * Plugin Name: Monteserín hamburguer menu for Genesis Sample
 * Plugin URI: https://pablomonteserin.com
 * Description: This plugin converts the usual menu in a hamburguer menu
 * Version: 1.0.0
 * Author: Pablo Monteserín
 * Author URI: https://pablomonteserin.com
 * License: GPL2
 */

//* Set the Markup in Responsive Menu Settings Sections of Functions.php
// Credit: Sridhar Katakam

// Step #1 : Locate the following code in functions.php

// Define our responsive menu settings.
function genesis_sample_responsive_menu_settings() {

    $settings = array(
        'mainMenu'          => __( 'Menu', 'genesis-sample' ),
        'menuIconClass'     => 'dashicons-before dashicons-menu',
        'subMenu'           => __( 'Submenu', 'genesis-sample' ),
        'subMenuIconsClass' => 'dashicons-before dashicons-arrow-down-alt2',
        'menuClasses'       => array(
            'combine' => array(
                '.nav-primary',
                '.nav-header',
            ),
            'others'  => array(),
        ),
    );

    return $settings;

}

wp_enqueue_script(
        'genesis-sample-responsive-menu',
        plugins_url("genesis-sample.js", __FILE__),
        array( 'jquery' ),
        CHILD_THEME_VERSION,
        true
    );

    wp_enqueue_script(
        'genesis-sample',
        plugins_url("responsive-menus.js", __FILE__) ,
        array( 'jquery' ),
        CHILD_THEME_VERSION,
        true
    );

 ?>