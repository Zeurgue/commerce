<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 27/03/2015
 * Time: 11:02
 */

?>

<?php

//inutile, pour liste les promotion mettre dans front-page.php

$args = array('post_type' => 'Zeurgue_Promotion',);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
    echo '<ul>';
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }
    echo '</ul>';
} else {
    // no posts found
}

echo "bonjour promotion-page";

/*add_action( 'wp', 'delete_expired_coupons_daily' );
function delete_expired_coupons_daily() {
    if ( ! wp_next_scheduled( 'delete_expired_coupons' ) ) {
        wp_schedule_event( time(), 'daily', 'delete_expired_coupons');
    }
}*/