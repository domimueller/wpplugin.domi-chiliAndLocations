<?php

/**
* Plugin Name: Teammember
* Plugin URI: 
* Description: Funktionalität für Teammember. Darstellung im Theme via template-teams.php
* Version: 1.0
* Author: Dominique Müller
* Author URI: 
**/







$plugin_url = WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__));

/* include Scripts*/
function domi_teams_customcss() {
    wp_enqueue_style( 'teamcss',  plugin_dir_url( __FILE__ ) . '/css/teams.css' );                      
}
add_action( 'wp_enqueue_scripts', 'domi_teams_customcss');


/* INCLUDE FILES */
include $plugin_url . '/includes/customPostType.php';
include $plugin_url . '/includes/advancedCustomFields.php';

?>