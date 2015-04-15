<?php

?>
<html><head><title>Worpdress Exam</title>

	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="icons">
			<?php
			for($i=0;$i<5;++$i) { ?>
			<img src="<?php echo get_template_directory_uri().'/img/'.$i; ?>.png" alt="">
			<?php
			}
			?>
		</div>
		<div>
			<p>Thème installé correctement !</p>
			<p><?php if(get_option('wpe_b1_plugin')) { ?>
				Plugin installé correctement !
			<?php } ?></p>
			<p><?php if(($__l__ = get_option('wpe_b1'))) echo $__l__; ?></p>
		</div>
	</header>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		
		echo '<h1><a href="',the_permalink(),'">',the_title(),'</a></h1>';
		echo '<div>',the_content(),'</div>';
	}
}
?>

<?php wp_footer(); ?>
</body>
</html>