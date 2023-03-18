<?php
add_action( 'after_setup_theme', 'theme_setup' );
function theme_setup() {
    load_theme_textdomain( 'tabbyknits', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'navigation-widgets' ) );
    register_nav_menus( array(
        'main-menu' => esc_html__( 'Main Menu', 'tabbyknits' ),
        'social-menu' => esc_html__( 'Social Menu', 'tabbyknits' )
    ));
}

/* Enqueue the styles and scripts */
add_action( 'wp_enqueue_scripts', 'theme_enqueue' );
function theme_enqueue() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery' );
}

/**
 * Font Awesome Kit Setup
 *
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = '') {
        foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
            add_action(
                $action,
                function () use ( $kit_url ) {
                    wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
                }
            );
        }
    }
    fa_custom_setup_kit('https://kit.fontawesome.com/ee70c4e20a.js');
}

// Custom ARIA walker for nav menus.
require_once "functions/aria-walker-nav-menu.php";

// Add support for core custom logo.
add_theme_support(
    'custom-logo',
    array(
        'flex-width'  => false,
        'flex-height' => false,
    )
);