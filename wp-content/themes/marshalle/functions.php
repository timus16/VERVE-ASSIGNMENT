<?php
function marshalle_enqueue_styles() {
    wp_enqueue_style('stylesheet', get_stylesheet_uri());

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/main.js',
        array(), // dependencies
        null,    // version (or use '6.8.2' if needed)
        true     // load in footer
    );
}

add_action('wp_enqueue_scripts', 'marshalle_enqueue_styles');

function marshalle_enqueue_assets() {
    wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@next/dist/aos.css');
    wp_enqueue_script('aos-js', 'https://unpkg.com/aos@next/dist/aos.js', array(), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'marshalle_enqueue_assets');


?>
