<?php
// START TASK 3
// Register CPT Books, slug 'library' with translatable labels
if (!function_exists('ttp_register_cpt_books')) {
    function ttp_register_cpt_books() {
        $labels = array(
            'name'                  => _x('Books', 'Post type general name', 'ttp'),
            'singular_name'         => _x('Book', 'Post type singular name', 'ttp'),
            'menu_name'             => _x('Books', 'Admin Menu text', 'ttp'),
            'name_admin_bar'        => _x('Book', 'Add New on Toolbar', 'ttp'),
            'add_new'               => __('Add New', 'ttp'),
            'add_new_item'          => __('Add New Book', 'ttp'),
            'new_item'              => __('New Book', 'ttp'),
            'edit_item'             => __('Edit Book', 'ttp'),
            'view_item'             => __('View Book', 'ttp'),
            'all_items'             => __('All Books', 'ttp'),
            'search_items'          => __('Search Books', 'ttp'),
            'parent_item_colon'     => __('Parent Books:', 'ttp'),
            'not_found'             => __('No books found.', 'ttp'),
            'not_found_in_trash'    => __('No books found in Trash.', 'ttp'),
            'featured_image'        => _x('Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ttp'),
            'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ttp'),
            'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ttp'),
            'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ttp'),
            'archives'              => _x('Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ttp'),
            'insert_into_item'      => _x('Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ttp'),
            'uploaded_to_this_item' => _x('Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ttp'),
            'filter_items_list'     => _x('Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ttp'),
            'items_list_navigation' => _x('Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ttp'),
            'items_list'            => _x('Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ttp'),
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'library'),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        );

        register_post_type('library', $args);
    }
}

add_action('init', 'ttp_register_cpt_books');

// Register taxonomy for cpt books, named book-genre with translatable labels
if (!function_exists('ttp_create_taxonomy_book_genre')) {
    function ttp_create_taxonomy_book_genre() {
        $labels = array(
            'name'              => _x('Genres', 'taxonomy general name', 'ttp'),
            'singular_name'     => _x('Genre', 'taxonomy singular name', 'ttp'),
            'search_items'      => __('Search Genres', 'ttp'),
            'all_items'         => __('All Genres', 'ttp'),
            'parent_item'       => __('Parent Genre', 'ttp'),
            'parent_item_colon' => __('Parent Genre:', 'ttp'),
            'edit_item'         => __('Edit Genre', 'ttp'),
            'update_item'       => __('Update Genre', 'ttp'),
            'add_new_item'      => __('Add New Genre', 'ttp'),
            'new_item_name'     => __('New Genre Name', 'ttp'),
            'menu_name'         => __('Genre', 'ttp'),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'book-genre'),
        );

        register_taxonomy('book-genre', array('library'), $args);
    }
}

add_action('init', 'ttp_create_taxonomy_book_genre');
// END TASK 3