<?php

/*
 *
 *Plugin name: Plugin Zeurgue Le Conquérant qui voulu être Obsolète dans le futur
 *
 */

add_action('init','Zeurgue_custom_post_types');

function Zeurgue_custom_post_types()
{
    register_post_type('Zeurgue_Promotion', array(
        'label' => 'Promotion',
        'public' => true,
        'date_expiration' => date('d M'),
    ));
}
