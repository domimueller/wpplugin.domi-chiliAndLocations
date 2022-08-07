<?php
function add_custom_taxonomies() {
  // Add new "Chilitype" taxonomy to Posts
  register_taxonomy('standort', 'domi_chili_cpt', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Standort', 'taxonomy general name' ),
      'singular_name' => _x( 'Standort', 'taxonomy singular name' ),
      'search_items' =>  __( 'Suche Standorte' ),
      'all_items' => __( 'Alle Standorte' ),
      'parent_item' => __( 'Eltern Standorte' ),
      'parent_item_colon' => __( 'Eltern Standorte:' ),
      'edit_item' => __( 'Bearbeite Standort' ),
      'update_item' => __( 'Aktualisiere Standort' ),
      'add_new_item' => __( 'Neuer Standort hinzufügen' ),
      'new_item_name' => __( 'Neuer Standort' ),
      'menu_name' => __( 'Standort' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'standorte' // This controls the base slug that will display before each term
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
?>