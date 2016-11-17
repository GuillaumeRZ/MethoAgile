<?php
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_parent_styles' );
        function child_theme_enqueue_parent_styles() {
                wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
        }
/** Tell WordPress to run bea_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'wsf_setup' );
function wsf_setup() {
        // This theme uses post thumbnails
        add_theme_support( 'post-thumbnails' );
 
        // Post_type support
        add_post_type_support( 'page', 'thumbnail' );
        add_image_size( '400x200', 400, 200, true );
        add_image_size( '260x260', 260, 260, true );
        add_image_size( '700x700', 700, 700, true );

register_nav_menus(
                array(
                        'main-menu' => 'Menu principal',
                )
        );
}
register_taxonomy(   'type',   'projet',   array(     'label' => 'Types',     'labels' => array(     'name' => 'Types',     'singular_name' => 'Type',     'all_items' => 'Tous les types',     'edit_item' => 'Éditer le type',     'view_item' => 'Voir le type',     'update_item' => 'Mettre à jour le type',     'add_new_item' => 'Ajouter un type',     'new_item_name' => 'Nouveau type',     'search_items' => 'Rechercher parmi les types',     'popular_items' => 'Types les plus utilisés'   ),   'hierarchical' => true   ) ); register_taxonomy(   'couleur',   'projet',   array(     'label' => 'Couleurs',     'labels' => array(     'name' => 'Couleurs',     'singular_name' => 'Couleur',     'all_items' => 'Toutes les couleurs',     'edit_item' => 'Éditer la couleur',     'view_item' => 'Voir la couleur',     'update_item' => 'Mettre à jour la couleur',     'add_new_item' => 'Ajouter une couleur',     'new_item_name' => 'Nouvelle couleur',     'search_items' => 'Rechercher parmi les couleurs',     'popular_items' => 'Couleurs les plus utilisées'   ),   'hierarchical' => false   ) ); register_taxonomy_for_object_type( 'type', 'projet' ); register_taxonomy_for_object_type( 'couleur', 'projet' );

