<?php


function domi_chiliTypes_cpt() {
    register_post_type('domi_chili_cpt',
        array(
            'labels'      => array(
                'name'               => _x('Chili', 'General name', 'wptheme.smartfarming'),
                'singular_name'      => _x('Chili', 'Singular name', 'wptheme.smartfarming'),
                'menu_name'          => _x('Chili', 'Menu name', 'wptheme.smartfarming'),
                'parent_item_colon'  => _x('Übergeordnete Chili', 'Parent item with colon', 'wptheme.smartfarming'),
                'all_items'          => _x('Alle Chilis anzeigen', 'All items', 'wptheme.smartfarming'),
                'view_item'          => _x('Chili anzeigen', 'View item', 'wptheme.smartfarming'),
                'add_new_item'       => _x('Chili hinzufügen', 'Add new item', 'wptheme.smartfarming'),
                'add_new'            => _x('Chili hinzufügen', 'Add new', 'wptheme.smartfarming'),
                'edit_item'          => _x('Chili bearbeiten', 'Edit item', 'wptheme.smartfarming'),
                'update_item'        => _x('Chili aktualisieren', 'Update item', 'wptheme.smartfarming'),
                'search_items'       => _x('Chili suchen', 'Search items', 'wptheme.smartfarming'),
                'not_found'          => _x('Keine Chilis gefunden.', 'Not found', 'wptheme.smartfarming'),
                'not_found_in_trash' => _x('Keine Chilis im Papierkorb gefunden.', 'Not found in trash', 'wptheme.smartfarming'),
            ),
            'description'         => _x('Chili Informationen', 'Description', 'wptheme.fgchilis'),
            'supports'            => ['title', 'thumbnail'],
            'hierarchical'        => true,
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
            'menu_icon'           => 'dashicons-heart',
        )
    );
}
add_action('init', 'domi_chiliTypes_cpt');
?>