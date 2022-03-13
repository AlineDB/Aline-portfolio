<?php

//charger les fichiers nécessaires
require_once(__DIR__ . './Menus/PrimaryMenuItem.php');

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
    'description' => 'Tous mes projets',
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

// Enregistrer un seul custom post-type pour "mes projets"
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
    if($locations[$location] ?? null){ //si dans locations il y a une clé location (si n'existe pas = null)
        //récupérer tous les éléments du menu récupéré
        $menu = $locations[$location];
        $posts = wp_get_nav_menu_items($menu);

        //formater chaque élément dans une instance de classe personnalisée. Boucler sur chaque post pour transformer le WP_post en une instance
        //de notre classe perso et on va l'ajouter à $items sauf si sous menu à l'item parent
        foreach($posts as $post){
            $item = new PrimaryMenuItem($post);

            $items[] = $item;
        }
    }




    //retourner un tableau d'éléments du menu formaté
    return $items;
}
