<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// TASK 2
require get_stylesheet_directory() . '/inc/asset-loader.php';

// TASK 3
require get_stylesheet_directory() . '/inc/custom-post-types/books.php';

// TASK 4 permalinks rewrite for WordPress core bug, explanation inside
require get_stylesheet_directory() . '/inc/book-genre-taxonomy-archive-pagination-fix.php';

// TASK 5
require get_stylesheet_directory() . '/inc/shortcodes.php';