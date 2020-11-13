<?php

//activer image mise en avant
add_theme_support( 'post-thumbnails' );

// ajouter une zone de menu
register_nav_menu( 'primary', __( 'Navigation Menu' ) );


// personnaliser lire la suite


//personaliser "lire la suite"
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">En savoir plus</a>';
}

add_filter( 'the_content_more_link', 'modify_read_more_link' );


// ajouter une zone de menu
register_nav_menu( 'primary', __( 'Navigation Menu' ) );


// Enregistrer une zone appelée 'Ma zone de widgets'
function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'La zone de widgets de Thomas',
                    'id'            => 'zone-widgets',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );















?>