<?php


function domi_location_cpt() {
    register_post_type('domi_location_cpt',
        array(
            'labels'      => array(
                'name'               => _x('Standort', 'General name', 'wptheme.smartfarming'),
                'singular_name'      => _x('Standort', 'Singular name', 'wptheme.smartfarming'),
                'menu_name'          => _x('Standort', 'Menu name', 'wptheme.smartfarming'),
                'parent_item_colon'  => _x('Übergeordnetes Team', 'Parent item with colon', 'wptheme.smartfarming'),
                'all_items'          => _x('Alle Standort anzeigen', 'All items', 'wptheme.smartfarming'),
                'view_item'          => _x('Standort anzeigen', 'View item', 'wptheme.smartfarming'),
                'add_new_item'       => _x('Standort hinzufügen', 'Add new item', 'wptheme.smartfarming'),
                'add_new'            => _x('Standort hinzufügen', 'Add new', 'wptheme.smartfarming'),
                'edit_item'          => _x('Standort bearbeiten', 'Edit item', 'wptheme.smartfarming'),
                'update_item'        => _x('Standort aktualisieren', 'Update item', 'wptheme.smartfarming'),
                'search_items'       => _x('Standort suchen', 'Search items', 'wptheme.smartfarming'),
                'not_found'          => _x('Keine Standort gefunden.', 'Not found', 'wptheme.smartfarming'),
                'not_found_in_trash' => _x('Keine Standort im Papierkorb gefunden.', 'Not found in trash', 'wptheme.smartfarming'),
            ),
            'description'         => _x('Standort Informationen', 'Description', 'wptheme.fgchilis'),
            'supports'            => ['title', 'thumbnail', 'editor'],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'capability_type'     => 'post',
            'map_meta_cap'        => true,
            'rewrite'             => false,
            'menu_icon'           => 'dashicons-location',
        )
    );
}
add_action('init', 'domi_location_cpt');
?>