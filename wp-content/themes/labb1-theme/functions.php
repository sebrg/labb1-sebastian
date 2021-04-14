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


register_nav_menu('footerMenu', 'Footer meny');
register_nav_menu('headerMenu', 'Header meny');



?>