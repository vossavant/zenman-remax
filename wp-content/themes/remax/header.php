<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
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

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class($post->post_name); ?>>
	<header>
		<div class="container d-flex align-items-center justify-content-between mt-3">
			<a class="logo" href="">RE/MAX Home</a>
			<?php
			$args = array(
				'container' => 'nav',
				'container_class' => 'top-menu',
				'theme_location' => 'top'
			);
			wp_nav_menu($args);
			?>
			<a class="btn btn-primary" href="">Create An Account</a>
		</div>

		<nav>
			<li>
				<a href="">For Buyers</a>
				<div>
					Mega menu here
				</div>
			</li>
			<li>
				<a href="">For Sellers</a>
				<div>
					Mega menu here
				</div>
			</li>
			<li>
				<a href="">For Owners</a>
				<div>
					Mega menu here
				</div>
			</li>
			<li>
				<a href="">For Fun</a>
				<div>
					Mega menu here
				</div>
			</li>
		</nav>
	</header>