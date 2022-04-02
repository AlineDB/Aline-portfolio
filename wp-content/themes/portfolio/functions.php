<?php

//charger les fichiers nécessaires
require_once(__DIR__ . './Menus/PrimaryMenuItem.php');
require_once(__DIR__ . '/Forms/BaseFormController.php');
require_once(__DIR__ . '/Forms/ContactFormController.php');
require_once(__DIR__ . '/Forms/Sanitizers/BaseSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/TextSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/EmailSanitizer.php');
require_once(__DIR__ . '/Forms/Validators/BaseValidator.php');
require_once(__DIR__ . '/Forms/Validators/RequiredValidator.php');
require_once(__DIR__ . '/Forms/Validators/EmailValidator.php');
require_once(__DIR__ . '/Forms/Validators/AcceptedValidator.php');

// Lancer la sessions PHP pour pouvoir passer des variables de page en page
add_action('init', 'dw_start_session', 1);

function dw_start_session()
{
    if (! session_id()) {
        session_start();
    }
}

// Désactiver l'éditeur "Gutenberg" de Wordpress
add_filter('use_block_editor_for_post', '__return_false');

// Activer les images sur les articles
add_theme_support('post-thumbnails');

// Enregistrer un seul custom post-type pour "mes projets"
register_post_type('Projets', [
    'label' => 'Projets',
    'labels' => [
        'name' => 'Projets',
        'singular_name' => 'Projet',
    ],
    'description' => 'Tous mes projets web et design',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-category',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'projets'],
]);

// Enregistrer un seul custom post-type pour "mes projets"
register_post_type('Autres', [
    'label' => 'Autres',
    'labels' => [
        'name' => 'Autres',
        'singular_name' => 'Autre',
    ],
    'description' => 'Tous mes autres projets',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-index-card',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'autres'],
]);

// Enregistrer un seul custom post-type pour "archives"
register_post_type('Archives', [
    'label' => 'Archives',
    'labels' => [
        'name' => 'Archives',
        'singular_name' => 'Archive',
    ],
    'description' => 'Archives',
    'public' => true,
    'menu_position' => 7,
    'menu_icon' => 'dashicons-archive',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'archives'],
]);

// Enregistrer un  custom post-type pour les données du form
register_post_type('message', [
    'label' => 'Messages de contact',
    'labels' => [
        'name' => 'Messages de contact',
        'singular_name' => 'Message de contact',
    ],
    'description' => 'Les messages envoyés par le formulaire de contact',
    'public' => false,
    'show_ui' => true,
    'menu_position' => 10,
    'menu_icon' => 'dashicons-buddicons-pm',
    'capabilities' => array('create-posts'=> false,),
    'map_meta_cap' => true,
]);

// Récupérer les projets via une requête Wordpress
function dw_get_projects($count = 20)
{
    // 1. on instancie l'objet WP_Query
    $projects = new WP_Query([
        'post_type' => 'Projets',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => $count,
    ]);

    // 2. on retourne l'objet WP_Query
    return $projects;
}

// Récupérer les autres projets via une requête Wordpress
function dw_get_othersProjects($count = 20)
{
    // 1. on instancie l'objet WP_Query
    $othersProjects = new WP_Query([
        'post_type' => 'Autres',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => $count,
    ]);

    // 2. on retourne l'objet WP_Query
    return $othersProjects;
}

//enregistrer les zones de menus
register_nav_menu('primary','Navigation principale (haut de page)');
register_nav_menu('footer','Navigation principale (pied de page)');

//fonction pour récupérer les éléments d'un menu sous forme d'un tableau d'objet
function dw_get_menu_items($location){
    $items = [];
    //récupérer le menu WP pour $location
    $locations = get_nav_menu_locations();
    if(!($locations[$location] ?? null)){//si dans locations il y a une clé location (si n'existe pas = null)
        return $items;
    }
    //récupérer tous les éléments du menu récupéré
    $menu = $locations[$location];
    $posts = wp_get_nav_menu_items($menu);

     //formater chaque élément dans une instance de classe personnalisée. Boucler sur chaque post pour transformer le WP_post en une instance
    //de notre classe perso et on va l'ajouter à $items sauf si sous menu à l'item parent
    foreach($posts as $post){
        $item = new PrimaryMenuItem($post);
        //retourner un tableau d'éléments du menu formaté
            $items[] = $item;
    }
    return $items;
}


//gérer l'envoi de formulaire personnalisé

add_action('admin_post_submit_contact_form', 'dw_handle_submit_contact_form');

function dw_handle_submit_contact_form(){
    // Instancier le controlleur du form
    $form = new ContactFormController($_POST);
    }


function dw_get_contact_field_value($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    return $_SESSION['contact_form_feedback']['data'][$field] ?? '';
}

function dw_get_contact_field_error($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    if(! ($_SESSION['contact_form_feedback']['errors'][$field] ?? null)) {
        return '';
    }

    return '<p>Ce champ ne respecte pas : ' . $_SESSION['contact_form_feedback']['errors'][$field] . '</p>';
}
