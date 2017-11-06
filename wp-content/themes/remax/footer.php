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
				<img class="my-4" src="<?php bloginfo('template_url'); ?>/images/logo/logo-white@2x.png" width="250">
				
				<ul class="footer-social list-unstyled mb-3">
					<li class="d-inline-block">
						<a class="social social-large social-facebook" href="">Facebook</a>
					</li>
					<li class="d-inline-block">
						<a class="social social-large social-twitter" href="">Twitter</a>
					</li>
					<li class="d-inline-block">
						<a class="social social-large social-google" href="">Google</a>
					</li>
					<li class="d-inline-block">
						<a class="social social-large social-instagram" href="">Instagram</a>
					</li>
					<li class="d-inline-block">
						<a class="social social-large social-linkedin" href="">LinkedIn</a>
					</li>
					<li class="d-inline-block">
						<a class="social social-large social-pinterest" href="">Pinterest</a>
					</li>
				</ul>
				
				<?php
				$args = array(
					'container' => 'ul',
					'menu_class' => 'footer-menu list-unstyled my-4',
					'theme_location' => 'footer'
				);
				wp_nav_menu($args);
				?>
				
				<small class="d-block mx-auto my-4 w-75">
					Each Office Independently Owned and Operated. RE/MAX, LLC is an Equal Opportunity Employer and supports the Fair Housing Act. &copy; <?= date('Y');?> RE/MAX, LLC. All Rights Reserved. Powered by Homes.com.
				</small>
			</div>
		</footer>
	
		<?php wp_footer(); ?>
	</div> <!-- // parallax-wrapper -->
</body>
</html>
