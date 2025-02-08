<?php
// START TASK 2
if (!function_exists('ttp_load_scripts')) {
    function ttp_load_scripts() {
        // Task 2 - enqueue script from assets/js/scripts, that depends on jquery and loads in footer
        wp_enqueue_script(
            'ttp-script',
            get_stylesheet_directory_uri() . '/assets/js/scripts.js',
            array('jquery'),
            filemtime(get_stylesheet_directory() . '/assets/js/scripts.js'), // I also added caching issues solution: the version is always the time of last file edit.
            array('strategy'  => 'defer')
        );
    }
}
add_action('wp_enqueue_scripts', 'ttp_load_scripts');
// END TASK 2
