<?php
add_action('init', 'gallery_init');
function gallery_init()
{
    $labels = array(
        'name'                  => _x('Galerie', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Galerie', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Galerie', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Galerie', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Nový obrázek', 'textdomain'),
        'add_new_item'          => __('Přidat', 'textdomain'),
        'new_item'              => __('Nová obrázek', 'textdomain'),
        'edit_item'             => __('Upravit obrázek', 'textdomain'),
        'view_item'             => __('Zobrazit obrázek', 'textdomain'),
        'all_items'             => __('Všechny obrázky', 'textdomain'),
        'search_items'          => __('Hledat obrázky', 'textdomain'),
        'parent_item_colon'     => __('Nadřazené obrázky:', 'textdomain'),
        'not_found'             => __('Žádné obrázky nenalezeny.', 'textdomain'),
        'not_found_in_trash'    => __('V koši nic nenalezeno.', 'textdomain'),
        'featured_image'        => _x('Obrázek', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Nastavit obrázek do galerie', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Odebrat obrázek', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Použít', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Seznam všech obrázků', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Vložit', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Nahrát', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filtrovat obrázky', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Navigace mezi obrázky', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Seznam obrázků', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'galerie' ),
        'has_archive'        => true,
        'hierarchical'       => true,
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-format-gallery',
        'supports'           => array( 'title', 'thumbnail' ),
    );

    register_post_type('gallery', $args);
}
?>