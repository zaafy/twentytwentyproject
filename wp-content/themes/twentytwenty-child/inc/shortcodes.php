<?php
// START TASK 5
// Task 5.1
add_shortcode( 'newest_book_title', 'ttp_newest_book_title_function' );

if (!function_exists('ttp_newest_book_title_function')) {
    function ttp_newest_book_title_function() {
        $args = array(
            'post_type' => 'library',
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            $query->the_post();
            return get_the_title();
        } else {
            return '<p>' . __('There are no books added yet!', 'ttp') . '</p>';
        }
    }
}

// Task 5.2
add_shortcode( 'list_books_from_genre', 'ttp_list_books_from_genre_function' );

if (!function_exists('ttp_list_books_from_genre_function')) {
    function ttp_list_books_from_genre_function($atts) {
        $atts = shortcode_atts(array(
            'genre' => '',
        ), $atts, 'list_books_from_genre');

        // if no atts or an empty attribute given
        if (empty($atts) || empty($atts['genre'])) {
            return '<p>' . __('Please provide the Genre to pull from! Either term_id or slug!', 'ttp') . '</p>';
        }

        // check if term exists
        if (NULL === term_exists((int) $atts['genre'], 'book-genre') || NULL === term_exists($atts['genre'], 'book-genre')) {
            return '<p>' . __('This Genre doesn\'t exist!', 'ttp') . '</p>';
        }

        $args = array(
            'post_type' => 'library',
            'posts_per_page' => 5,
            'orderby' => 'name',
            'order' => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'book-genre',
                    'field' => 'id',
                    'terms' => $atts,
                    'operator' => 'IN',
                )
            )
        );

        if ((int) $atts['genre'] > 0) { // if term_id given
            $args['tax_query'][0]['field'] = 'id';
        } else if (!empty($atts['genre'])) { // else if term name given
            $args['tax_query'][0]['field'] = 'slug';
        }

        $response = '<ul>';
        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $response .= '<li>' . get_the_title() . '</li>';
            }
        } else {
            return '<p>' . __('There are no books in this Genre!', 'ttp') . '</p>';
        }

        $response .= '</ul>';
        return $response;
    }
}

// END TASK 5