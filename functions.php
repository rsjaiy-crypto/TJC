<?php

function tjc_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ] );
}
add_action( 'after_setup_theme', 'tjc_setup' );

function tjc_assets() {
    wp_enqueue_style(
        'tjc-fonts',
        'https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,400;0,500;1,400;1,500&family=Jost:wght@300;400;500&family=Playfair+Display:ital,wght@0,400;0,500;1,400;1,500&display=swap',
        [],
        null
    );
    wp_enqueue_style( 'tjc-style', get_stylesheet_uri(), [ 'tjc-fonts' ], '4.0.0' );
    wp_enqueue_script( 'tjc-nav',          get_template_directory_uri() . '/js/navigation.js',    [], '4.0.0', true );
    wp_enqueue_script( 'tjc-carousel',     get_template_directory_uri() . '/js/carousel.js',      [], '4.0.0', true );
    wp_enqueue_script( 'tjc-scroll-reveal', get_template_directory_uri() . '/js/scroll-reveal.js', [], '4.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'tjc_assets' );

function tjc_favicon() {
    $icon = esc_url( get_template_directory_uri() ) . '/assets/TJC-Favicon.png';
    echo '<link rel="icon" type="image/png" href="' . $icon . '">' . "\n";
    echo '<link rel="shortcut icon" href="' . $icon . '">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . $icon . '">' . "\n";
}
add_action( 'wp_head', 'tjc_favicon' );

function tjc_document_title_parts( $title ) {
    if ( is_front_page() ) {
        return [
            'title'   => 'The Jaiye Concierge',
            'tagline' => 'Private Members\' Concierge',
        ];
    }
    $title['site'] = 'The Jaiye Concierge';
    unset( $title['tagline'] );
    return $title;
}
add_filter( 'document_title_parts', 'tjc_document_title_parts' );

function tjc_title_separator() {
    return '|';
}
add_filter( 'document_title_separator', 'tjc_title_separator' );

function tjc_meta_description() {
    if ( is_front_page() ) {
        echo '<meta name="description" content="A private members\' concierge. Travel, health, access and lifestyle, handled quietly and precisely. London based, globally connected.">' . "\n";
    }
}
add_action( 'wp_head', 'tjc_meta_description' );
