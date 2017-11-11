		<?php if (is_front_page()) : ?>
			<div class="bg-primary footer-top py-4">
				<div class="container my-2">
					<div class="row">
						<?php
						/**
						 * Defines widget-ready areas
						 * These are customizable from Appearance → Widgets
						 */
						if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer (Left Column)')) :
						endif;
						
						if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer (Center Left Column)')) :
						endif;
						
						if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer (Center Right Column)')) :
						endif;
						
						if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer (Right Column)')) :
						endif;
						?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
		<footer class="bg-secondary py-3 text-center text-white">
			<div class="container">
				<div class="row">
					<div class="col">
						<?php if ($footer_logo = get_field('footer_logo', 'option')) : ?>
							<img class="my-4 mw-100" src="<?= $footer_logo; ?>" width="250">
						<?php endif; ?>

						<ul class="footer-social list-unstyled mb-3">
							<?php if (FACEBOOK_URL) : ?>
								<li class="d-inline-block">
									<a class="social social-large social-facebook" href="<?= FACEBOOK_URL; ?>">Facebook</a>
								</li>
							<?php endif; ?>
							<?php if (TWITTER_URL) : ?>
								<li class="d-inline-block">
									<a class="social social-large social-twitter" href="<?= TWITTER_URL; ?>">Twitter</a>
								</li>
							<?php endif; ?>
							<?php if (GOOGLE_URL) : ?>
								<li class="d-inline-block">
									<a class="social social-large social-google" href="<?= GOOGLE_URL; ?>">Google</a>
								</li>
							<?php endif; ?>
							<?php if (INSTAGRAM_URL) : ?>
								<li class="d-inline-block">
									<a class="social social-large social-instagram" href="<?= INSTAGRAM_URL; ?>">Instagram</a>
								</li>
							<?php endif; ?>
							<?php if (LINKEDIN_URL) : ?>
								<li class="d-inline-block">
									<a class="social social-large social-linkedin" href="<?= LINKEDIN_URL; ?>">LinkedIn</a>
								</li>
							<?php endif; ?>
							<?php if (PINTEREST_URL) : ?>
								<li class="d-inline-block">
									<a class="social social-large social-pinterest" href="<?= PINTEREST_URL; ?>">Pinterest</a>
								</li>
							<?php endif; ?>
						</ul>
						
						<?php
						$args = array(
							'container' => 'ul',
							'menu_class' => 'footer-menu list-unstyled my-4',
							'theme_location' => 'footer'
						);
						wp_nav_menu($args);
						?>

						<?php if ($fine_print = get_field('footer_fine_print', 'option')) : ?>
							<small class="d-block mx-auto my-4 col-12 col-lg-9">
								<?= $fine_print; ?>
							</small>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</footer>
	
		<?php wp_footer(); ?>
	</div> <!-- // parallax-wrapper -->
</body>
</html>
