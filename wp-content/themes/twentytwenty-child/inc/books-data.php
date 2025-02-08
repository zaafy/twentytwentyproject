<?php
add_action( 'wp_ajax_nopriv_get_books_data', 'ttp_get_books_data' );
add_action( 'wp_ajax_get_books_data', 'ttp_get_books_data' );

if (!function_exists('ttp_get_books_data')) {
    function ttp_get_books_data() {
        $args = array(
            'post_type' => 'library',
            'posts_per_page' => 20,
        );
        $query = new WP_Query($args);
        $data = array();

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $genres = array();

                foreach (get_the_terms(get_the_ID(), 'book-genre') as $genre) {
                    array_push($genres, $genre->name);
                }

                $genres = implode(', ', $genres);

                // order the array with post_ID's
                $data[get_the_ID()] = array(
                    'name' => get_the_title(),
                    'date' => get_the_date(),
                    'genre' => $genres,
                    'excerpt' => get_the_excerpt(),
                );
            }
        }

        wp_reset_postdata();

        if (sizeof($data) > 0) {
            wp_send_json_success($data);
        } else {
            wp_send_json_error('There are no posts in Books CPT');
        }
    }
}