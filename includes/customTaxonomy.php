<?php
function add_custom_taxonomies() {
  // Add new "Chilitype" taxonomy to Posts
  register_taxonomy('Chilitype', 'domi_location_cpt', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Chilisorte', 'taxonomy general name' ),
      'singular_name' => _x( 'Chilisorte', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Locations' ),
      'all_items' => __( 'Alle Chilisorten' ),
      'parent_item' => __( 'Eltern Chilisorte' ),
      'parent_item_colon' => __( 'Eltern Chilisorte:' ),
      'edit_item' => __( 'Bearbeite Chilisorte' ),
      'update_item' => __( 'Aktualisiere Chilisorte' ),
      'add_new_item' => __( 'Neue Chilisorte hinzufügen' ),
      'new_item_name' => __( 'Neue Chilisorte' ),
      'menu_name' => __( 'Chilisorte' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'chilisorten', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );
?>