<?php 
/**
 * Plugin Name: Monteserín repeat code
 * Plugin URI: https://pablomonteserin.com
 * Description: This plugin allows insert the same code in a lot of pages using the shortcode [putCode] or [putCode text=":)"] and editing the source code of the plugin
 * Version: 1.0.0
 * Author: Pablo Monteserín
 * Author URI: https://pablomonteserin.com
 * License: GPL2
 */


add_action('woocommerce_after_single_product', function() {


	global $product;
    $attributes = $product->get_attributes();
    if ( ! $attributes ) {
        return;
    }
    $display_result = '';
    foreach ( $attributes as $attribute ) {
        if ( $attribute->get_variation() ) {
            continue;
        }
		$name = $attribute->get_name();
        if ( $attribute->is_taxonomy() ) {
            $terms = wp_get_post_terms( $product->get_id(), $name, 'all' );
            $cwtax = $terms[0]->taxonomy;
            $cw_object_taxonomy = get_taxonomy($cwtax);
            if ( isset ($cw_object_taxonomy->labels->singular_name) ) {
                $tax_label = $cw_object_taxonomy->labels->singular_name;
            } elseif ( isset( $cw_object_taxonomy->label ) ) {
                $tax_label = $cw_object_taxonomy->label;
                if ( 0 === strpos( $tax_label, 'Product ' ) ) {
                    $tax_label = substr( $tax_label, 8 );
                }
            }
            $display_result .= $tax_label . ': ';
			$tax_terms = array();
            foreach ( $terms as $term ) {
				$single_term = esc_html( $term->name );
				echo '<img style="width:100px; height:100px" src="'.plugin_dir_url( __FILE__ ).'/images/'.$single_term.'.jpg">"ww';
            }
        } 
    }	


});

 ?>