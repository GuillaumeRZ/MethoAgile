<?php
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_parent_styles' );
        function child_theme_enqueue_parent_styles() {
                wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        }
/** Tell WordPress to run bea_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'trump_setup' );
function trump_setup() {
register_nav_menus(
                array(
                        'main-menu' => 'Menu principal',
                )
        );
}