<?php
//ajoute la my_enqueue_styles avec une priorité moins haute pour être chargé en dernier (11)
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', 11 );
//fct qui charge le style.css du thème enfant
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}

?>