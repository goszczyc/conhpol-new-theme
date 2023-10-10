<?php
// Register Custom Post Type
function custom_post_type()
{

    $labels = array(
        'name'                  => _x('Kolekcje', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Kolekcja', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Kolekcje', 'text_domain'),
        'name_admin_bar'        => __('Post Type', 'text_domain'),
        'archives'              => __('Archiwum kolekcji', 'text_domain'),
        'attributes'            => __('Arybuty kolekcji', 'text_domain'),
        'parent_item_colon'     => __('Rodzic kolekcji:', 'text_domain'),
        'all_items'             => __('Wszystkie kolekcje', 'text_domain'),
        'add_new_item'          => __('Dodaj nową kolekcję', 'text_domain'),
        'add_new'               => __('Dodaj nową', 'text_domain'),
        'new_item'              => __('Nowa kolekcja', 'text_domain'),
        'edit_item'             => __('Edytuj kolekcję', 'text_domain'),
        'update_item'           => __('Zaktualizuj kolekcję', 'text_domain'),
        'view_item'             => __('Zobacz kolekcję', 'text_domain'),
        'view_items'            => __('Zobacz kolekcje', 'text_domain'),
        'search_items'          => __('Wyszukaj kolekcję', 'text_domain'),
        'not_found'             => __('Nie znleziono', 'text_domain'),
        'not_found_in_trash'    => __('Nie znleziono w Koszu', 'text_domain'),
        'featured_image'        => __('Obrazek wyróżniający', 'text_domain'),
        'set_featured_image'    => __('Ustaw obrazek wyróżniający', 'text_domain'),
        'remove_featured_image' => __('Usuń obrazek wyróżniający', 'text_domain'),
        'use_featured_image'    => __('Użyj jako obrazek wyróżniający', 'text_domain'),
        'insert_into_item'      => __('Wstaw do kolekcji', 'text_domain'),
        'uploaded_to_this_item' => __('Wyślij do tej kolekcji', 'text_domain'),
        'items_list'            => __('Lista kolekcji', 'text_domain'),
        'items_list_navigation' => __('Menu listy kolekcji', 'text_domain'),
        'filter_items_list'     => __('Filtruj listę kolekcji', 'text_domain'),
    );
    $args = array(
        'label'                 => __('Kolekcja', 'text_domain'),
        'description'           => __('Kolekcje', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'hierarchical'          => false,
        'menu_icon'             => 'dashicons-open-folder',
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'rewrite' => array('slug' => 'kolekcje', 'with_front' => false),
    );
    register_post_type('collections', $args);
}
add_action('init', 'custom_post_type', 0);
