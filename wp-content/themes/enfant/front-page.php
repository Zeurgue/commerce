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
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?> <li> <a> <?php echo get_the_title() ?> </a> </li> <?php
}
echo '</ul>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();


$google='http://www.google.fr';
do_action( 'admin_menu', 'bonjour' );

?>