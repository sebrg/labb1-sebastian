<?php
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('widgets');

register_sidebar(
    [
        'name' => 'footerWidget',
        'description' => 'KortOmOss',
        'id' => 'f1',
        'before_widget' => false,
    ]
);

register_sidebar(
    [
        'name' => 'footerWidget2',
        'description' => 'Kontakt',
        'id' => 'f2',
        'before_widget' => false,
    ]
);

register_sidebar(
    [
        'name' => 'footerWidget3',
        'description' => 'Socials',
        'id' => 'f3',
        'before_widget' => false,
    ]
);


register_sidebar(
    [
        'name' => 'head-search',
        'description' => 'search-bar-header',
        'id' => 'search',
        'before_widget' => false,
    ]
);

register_sidebar(
    [
        'name' => 'home-sidebar',
        'description' => 'home-sidebar',
        'id' => 'home-sidebar',
    ]
);

function register_menus() {
register_nav_menu('header-menu', 'header-meny');
register_nav_menu("undersida-menu", "undersida menu"); 
}

add_action('after_setup_theme', 'register_menus');











?>