<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 27/03/2015
 * Time: 10:13
 */

add_action('')
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

//add_filter( 'pre_get_posts', 'my_get_posts' );

/*function my_get_posts( $query ) {
    if ( is_home() )
        $query->set( 'Zeurgue_Promotion', array( 'Promotion' ) );

    echo "je suis la";
    return $query;
}*/
?>

