<?php
echo "prout pouety"
?>

<?php

?>

<!--
https://codex.wordpress.org/Theme_Development

https://codex.wordpress.org/The_Loop
-->

<html><head><title>Worpdress</title>

</head>
<body>
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        // var_dump($post);

        echo '<h1>',$post->post_title,'</h1>';
        echo '<div>',$post->post_content,'</div>';

    /* ou
            echo '<h1>',the_title(),'</h1>';
        echo '<div>',the_content(),'</div    >';
*/
    } // end while
} // end if
?> ody>
</html>