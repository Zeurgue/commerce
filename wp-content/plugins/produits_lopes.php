<?php

/*
 *
 *Plugin name: Plugin Lopes
 *
 */

add_action('init','lopes_custom_post_types');

function lopes_custom_post_types()
{
    register_post_type('lopes_produit', array(
        'label' => 'Produits',
        'public' => true,
    ));
}