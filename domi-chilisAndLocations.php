<?php

/**
* Plugin Name: Chili-Sorten und Standorte
* Plugin URI: 
* Description: Funktionalität für Erfassung von Chili-Sorten und Standorten
* Version: 1.0
* Author: Dominique Müller
* Author URI: 
**/







$plugin_url = WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__));

/* include Scripts*/
function domi_chiliLocation_customcss() {
    wp_enqueue_style( 'teamcss',  plugin_dir_url( __FILE__ ) . '/css/custom.css' );                      
}
add_action( 'wp_enqueue_scripts', 'domi_chiliLocation_customcss');


/* INCLUDE FILES */
include $plugin_url . '/includes/customPostType.php';
include $plugin_url . '/includes/advancedCustomFields.php';
include $plugin_url . '/includes/customTaxonomy.php';
?>