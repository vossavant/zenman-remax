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
		<?php if (is_front_page()) : ?>
			<div class="container d-flex align-items-center justify-content-between mt-3">
				<a class="logo" href="<?= home_url(); ?>">RE/MAX Home</a>
				<?php
				$args = array(
					'container' => 'nav',
					'container_class' => 'top-menu',
					'item_spacing' => 'discard',
					'theme_location' => 'top'
				);
				wp_nav_menu($args);
				?>
				<a class="btn btn-primary" href="">Create An Account</a>
			</div>
		<?php else : ?>
			<div class="blog-social-header pt-2">
				<div class="container">
					<?php get_template_part('partials/blog-post-social'); ?>
				</div>
			</div>
			<div class="container position-relative pt-3 text-center">
				<a class="logo logo-large mt-1" href="<?= home_url(); ?>">RE/MAX Home</a>
				<?= get_search_form(); ?>
			</div>
		<?php endif; ?>

		<div class="<?php if (!is_front_page()) { echo 'blog-nav '; } ?>bg-primary border border-secondary border-top-0 border-right-0 border-bottom-4 border-left-0 mt-4 text-center">
			<?php
			$args = array(
				'container' => 'nav',
				'container_class' => 'container nav-primary nav-on-dark',
				'item_spacing' => 'discard',
				'menu_class' => 'd-flex justify-content-around position-relative',
				'theme_location' => 'main',
				'walker' => new Walker_Simple_Example()
			);
			wp_nav_menu($args);
			?>
		</div>
	</header>