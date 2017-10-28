<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <script src="https://use.typekit.net/qld0gru.js"></script>-->
<!--    <script>try{Typekit.load({ async: true });}catch(e){}</script>-->

	<link href="<?php bloginfo('template_url'); ?>/favicon.ico" rel="shortcut icon">

	<title>
		<?php
		if ( is_front_page() ) {
			echo get_option( 'blogname' ) . ' | ' .  get_bloginfo( 'description' );
		} else {
			wp_title(''); echo ' | ' . get_option( 'blogname' );
		}
		?>
	</title>

    <?php wp_head(); ?>
</head>

<body<?php body_class($post->post_name); ?>>

header loaded