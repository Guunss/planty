<?php
//ajoute la my_enqueue_styles avec une priorité moins haute pour être chargé en dernier (11)
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 11);
//fct qui charge le style.css du thème enfant
function my_theme_enqueue_styles()
{
    wp_enqueue_style('child-style', get_stylesheet_uri());
}

function register_my_menus()
{
    register_nav_menu('Navigation', __('Header Menu'));
}
add_action('init', 'register_my_menus');

/* MENU ADMIN */
add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);
function add_extra_item_to_nav_menu($items, $args)
{
    if (is_user_logged_in() && $args->menu == 'Navigation') {
        $items_array = array(); // création tableau menu
        while (false !== ($item_pos = strpos($items, '<li', 3))) // limitation du menu à 3 éléments
        {
            $items_array[] = substr($items, 0, $item_pos);
            $items = substr($items, $item_pos);
        }
        $items_array[] = $items;
        array_splice($items_array, 1, 0, '<li class="menu-item menu-admin"><a href="/wp-admin/">Admin</a></li>'); // insertion du lien en 2e position

        $items = implode('', $items_array);
    }
    return $items;
}

?>