<?php

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

// Récupérer les trips via une requête Wordpress
function dw_get_projects($count = 20)
{
    // 1. on instancie l'objet WP_Query
    $projects = new WP_Query([
        'post_type' => 'projets',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => $count,
    ]);

    // 2. on retourne l'objet WP_Query
    return $projects;
}