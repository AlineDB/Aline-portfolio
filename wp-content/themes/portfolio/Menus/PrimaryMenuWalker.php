<?php

class PrimaryMenuWalker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) // output = string du html (div, ul, li), item = objet du lien en BDD, depth = profondeur du lien
    {
        $icon = get_field('icon', $item); //récupérer l'icone dans  ACF
        $containerClasses = [];

        if ($icon){
            $containerClasses[] = $icon; //les ajoute dans les classes afin de les gérer en css
        }

        if($item->current) {
            $containerClasses[] = 'current';
        }
        if(in_array('menu-item-type-custom', $item->classes)){
            $containerClasses[]= 'custom';
        }
        $output .= '<li class="' . $this->generateBemClasses('nav__item', $containerClasses) . '">';
        $output .= '<a href="' . $item->url . '" class="nav__link"'
            . ($item->attr_title ? ' title="' . $item->attr_title . '"' : '')
            .'>' . $item->title . '</a>';

    }
    function  generateBemClasses($base, array $modifiers =[]){
        $value = $base;
        foreach ($modifiers as $modifier){
            $value .= ' ' . $base . '--' . $modifier;
        }


        return $value;
    }
    public function end_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {

    }
    //fonction qui ne retourne rien, & est un indicateur de référence, permet de modifier la variable original dans une fonction
}