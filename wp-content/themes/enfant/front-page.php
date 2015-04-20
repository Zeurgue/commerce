<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 27/03/2015
 * Time: 11:02
 */

?>

<?php

$args = array('post_type' => 'Zeurgue_Promotion',);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

    //var_dump($the_query);
    //var_dump($args);
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?> <li
            style="border-bottom: dashed 2px black; list-style-type: none; text-align: center">
            <a href="http://localhost/WORDPRESS/wordpress/?zeurgue_promotion= <?php echo get_the_title() ?>"> <?php echo get_the_title() ?> </a> </li>
        <li> <?php echo get_the_content() ?> </li>
        <li> <?php echo get_post_meta($args -> ID, 'id_zeurgue_box') ?> </li>

<?php }
echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();


$google='http://www.google.fr';
do_action( 'admin_menu', 'bonjour' );

?>