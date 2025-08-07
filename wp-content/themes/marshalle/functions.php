<?php
function marshalle_enqueue_assets() {
    // Enqueue Styles
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css',
        array(),
        '5.3.0'
    );

    wp_enqueue_style(
        'animate-css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
        array(),
        '4.1.1'
    );

    wp_enqueue_style(
        'aos-css',
        'https://unpkg.com/aos@next/dist/aos.css',
        array(),
        null
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue Scripts
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.0',
        true
    );

    wp_enqueue_script(
        'aos-js',
        'https://unpkg.com/aos@next/dist/aos.js',
        array(),
        null,
        true
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'marshalle_enqueue_assets');
?>
