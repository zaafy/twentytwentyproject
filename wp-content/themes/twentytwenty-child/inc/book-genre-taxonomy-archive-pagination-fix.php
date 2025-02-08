<?php
// This function fixes the taxonomy archive pagination bug in WordPress.
// The bug is: if you change your posts_per_page and use pagination, the setting in WP Admin Panel -> Reading -> Show max posts is messing with the code of custom WP_Query.
// So we rewrite it for this custom taxonomy to always be X.
// This is done to not change the value in settings, as we don't want to change archives other than this one.
function ttp_modify_book_genre_query($query) {
    if (!is_admin() && $query->is_tax("product_cat")) {
        $query->set('posts_per_page', 5);
    }
}
add_action( 'pre_get_posts', 'ttp_modify_book_genre_query' );