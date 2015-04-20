<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 27/03/2015
 * Time: 10:13
 */


add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

add_theme_support( 'post-thumbnails' );

//add_filter( 'pre_get_posts', 'my_get_posts' );

/*function my_get_posts( $query ) {
    if ( is_home() )
        $query->set( 'Zeurgue_Promotion', array( 'Promotion' ) );

    echo "je suis la";
    return $query;
}*/

//add_meta_box( 'idExp', 'Expirationdate', 'boxExpdate', 'Zeurgue_post_type' /*, $context, $priority, $callback_args*/ );
/*function boxExpdate(){
    ?>
    <form>
        <input type="text" name="dateExp">
    </form>
<?php }
add_action('add_meta_box', 'boxExpdate');*/

function add_my_meta_box() {
    $var1 = 'this';
    $var2 = 'that';
    add_meta_box(
        'metabox_id',
        'Metabox Title',
        'my_metabox_callback',
        'page',
        'normal',
        'low',
        array( 'foo' => $var1, 'bar' => $var2)
    );
}

// $post is an object containing the current post (as a $post object)
// $metabox is an array with metabox id, title, callback, and args elements.
// The args element is an array containing your passed $callback_args variables.

function my_metabox_callback ( $post, $metabox ) {
    echo 'Last Modified: ' . $post->post_modified;        // outputs last time the post was modified
    echo $metabox['args']['foo'];                         // outputs 'this'
    echo $metabox['args']['bar'];                         // outputs 'that'
    echo get_post_meta( $post->ID, 'my_custom_field', true ); // outputs value of custom field
}

