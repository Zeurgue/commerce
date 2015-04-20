<?php

/*
 *
 *Plugin name: Plugin Zeurgue Le Conquérant qui voulu être Obsolète dans le futur
 *
 */

//add_theme_support( 'post-thumbnails' );
//set_post_thumbnail_size( 50, 50, true );



add_action('init','Zeurgue_post_types');

function Zeurgue_post_types()
{
    register_post_type('Zeurgue_Promotion', array(
        'label' => 'Promotion',
        'labels' => array('Promotion','thumbnail'),
        'public' => true,
    )
    );

}

//meta-box date expiration
add_action( 'add_meta_boxes', 'Zeurgue_add_box' );
function Zeurgue_add_box()
{
    $screens = array('Zeurgue_Promotion', 'promotion');
    foreach ($screens as $screen) {
        add_meta_box(
            'id_zeurgue_box_datefin',               // Unique ID
            'Date de fin de promotion',    // Box title
            'Zeurgue_inner_box',          // Content callback == function afficher formulaire
            $screen                      // post type
        );
    }


}

add_action ('add_meta_boxes', 'Zeurgue_show_box');

function Zeurgue_show_box()
{

$screens = array('Zeurgue_Promotion', 'promotion');

    foreach ($screens as $screen) {
        add_meta_box(
            'image vitrine',
            'vitrine',
            'Zeurgue_show',
            $screen
        );}
}

function Zeurgue_show($screen)
{
    ?>
    <form method="post">
        <input type="file" name="vitrine"/>
        <input type="submit" name="vitrineok"/>
    </form>
<?php
}

function Zeurgue_inner_box( $screen ) {
    ?>
    <form method="post">
       <label> <?php echo $screen-> ID ?></label> <input type="date" name="datefin"/>
        <input type="submit" name="dateok"/>
        <label> <?php var_dump($screen)?></label>
        <label> <?php var_dump($_POST)?></label>
        <label> <?php var_dump(add_meta_box(
                'id_zeurgue_box_datefin',               // Unique ID
                'Date de fin de promotion',    // Box title
                'Zeurgue_inner_box',          // Content callback == function afficher formulaire
                $screen                      // post type
            ))?></label>
    </form>
<?php
}

add_action( 'save_post', 'Zeurgue_save_promo' );
//update_post_meta: id du post/id_du_formulaire/valeur a y mettre/(optionnel) ancienne valeur
function Zeurgue_save_promo( $screen ) //{
    /*if ( isset($_POST["datefin"]) && isset($_POST["dateok"]) )*/ {
        update_post_meta( $screen-> ID,
            'id_zeurgue_box_datefin',
            $_POST['datefin']
        );

    //}
}
