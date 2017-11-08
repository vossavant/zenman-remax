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
						<img class="my-4" src="<?php bloginfo('template_url'); ?>/images/logo/logo-white@2x.png" width="250">

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

						<small class="d-block my-4">
							Each Office Independently Owned and Operated. RE/MAX, LLC is an Equal Opportunity Employer and supports the Fair Housing Act. &copy; <?= date('Y');?> RE/MAX, LLC. All Rights Reserved. Powered by Homes.com.
						</small>
					</div>
				</div>
			</div>
		</footer>
	
		<?php wp_footer(); ?>
	</div> <!-- // parallax-wrapper -->
</body>
</html>
