<?php
/*
 Plugin Name: NoodleZero_nested_category_plugin
Plugin URL: http://www.NoodleZero_nested_category_plugin.com
Description: NoodleZero_nested_category_plugin for Woocommerce
Author: KK
Version: 1.0
Depends: WooCommerce Nested Category Layout
 */
function noodlezero_product_cats_css() {

    /* register the stylesheet */
    wp_register_style( 'noodlezero_product_cats_css', plugins_url( 'css/style.css', __FILE__ ) );

    /* enqueue the stylsheet */
    wp_enqueue_style( 'noodlezero_product_cats_css' );

}

add_action( 'wp_enqueue_scripts', 'noodlezero_product_cats_css' );

function include_template_functions() {
    // Load any deprecated functions for previous WooCommerce versions first.
    require_once( $this->get_plugin_path() . '/woocommerce-template-deprecated.php' );
    // Then load the current ones.
    require_once( $this->get_plugin_path() . '/woocommerce-template.php' );
}

// Override the WooCommerce template functions.
add_action( 'after_setup_theme', array( $this, 'include_template_functions' ) );




?>


