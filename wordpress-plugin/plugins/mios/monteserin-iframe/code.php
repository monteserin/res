<?php 
/**
 * Plugin Name: Monteserin responsive iframe
 * Plugin URI: https://pablomonteserin.com
 * Description: Inserta un irame responsive mi shortcode banner
 * Version: 1.0.0
 * Author: Pablo Monteserín
 * Author URI: https://pablomonteserin.com
 * License: GPL2
 */
add_shortcode( "mi", function($atts, $content){
	$id = $atts['id'];
	return '<div class="responsiveContent"><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
});

 ?>