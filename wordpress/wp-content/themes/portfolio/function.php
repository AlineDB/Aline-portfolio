<?php

// Désactiver l'éditeur "Gutenberg" de Wordpress
add_filter('use_block_editor_for_post', '__return_false');

// Activer les images sur les articles
add_theme_support('post-thumbnails');

// Enregistrer un seul custom post-type pour "mes projets"
register_post_type('projets', [
    'label' => 'Projets',
    'labels' => [
        'name' => 'Projets',
        'singular_name' => 'Projet',
    ],
    'description' => 'Tous mes projets',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-repository',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'projets'],
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