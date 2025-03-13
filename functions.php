<?php
function ajouter_scripts_et_styles() {
    wp_enqueue_style('avis', get_template_directory_uri() . '/css/avis.css');
    wp_enqueue_style('contact', get_template_directory_uri() . '/css/contact.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/css/footer.css');
    wp_enqueue_style('actualite', get_template_directory_uri() . '/css/actualite.css');
    wp_enqueue_style('filmographie', get_template_directory_uri() . '/css/filmographie.css');
    wp_enqueue_style('accueil', get_template_directory_uri() . '/css/accueil.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/css/header.css');

// Leaflet (pour la carte)
wp_enqueue_style('leaflet-css', 'https://unpkg.com/leaflet/dist/leaflet.css');
wp_enqueue_script('leaflet-js', 'https://unpkg.com/leaflet/dist/leaflet.js', array(), null, true);


    wp_enqueue_script('jquery');



    wp_enqueue_script('avis', get_template_directory_uri() . '/js/avis.js', array('jquery'), null, true);
    wp_enqueue_script('contact', get_template_directory_uri() . '/js/contact.js', array('jquery'), null, true);
    wp_enqueue_script('scriptapropos', get_template_directory_uri() . '/js/scriptapropos.js', array('jquery'), null, true);
    wp_enqueue_script('footer', get_template_directory_uri() . '/js/footer.js', array('jquery'), null, true);

}
add_action('wp_enqueue_scripts', 'ajouter_scripts_et_styles');

function enregistrer_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'mon-theme')
    ));
}
add_action('after_setup_theme', 'enregistrer_menus');