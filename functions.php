<?php

function themaGio_bronnen() {
  wp_enqueue_script('gio-scripts', get_theme_file_uri('js/scriptsGio.js'), NULL, '1.0', true);
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'themaGio_bronnen');

// registreer menu's van get thema

register_nav_menus( array (
    'hoofd' => __('Hoofd menu'),
    'footer' => __('Menu in footer'),
));

?>
