<?php

add_action( 'wp_enqueue_scripts', 'webphp_exam_b1_theme_scripts' );
function webphp_exam_b1_theme_scripts() {
	wp_enqueue_style( 'wpe-styles', get_stylesheet_uri() );
}

add_action( 'after_switch_theme', 'webphp_exam_b1_theme_act' );

function webphp_exam_b1_theme_act() {
	add_option('wpe_b1_theme',md5(rand()));
	$dir = get_template_directory();
	
	require $dir . '/inc/identicon-mod.php';
	
	if(function_exists('imagecreatetruecolor')) {
		try {
			for($i=0;$i<5;++$i) {
				$img = identicon_fromhash(md5(rand()), 200);
				imagepng($img, $dir . '/img/'.$i.'.png');
			}
		}
		catch(Exception $e) {}
	}

}

?>