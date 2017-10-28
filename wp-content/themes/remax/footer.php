	<div class="bg-primary">
		<div class="container">
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
	
	<footer class="bg-secondary text-center">
		<div class="container">
			[logo]
			
			<ul class="remax-social">
				<li>
					<a href="">Facebook</a>
				</li>
				<li>
					<a href="">Twitter</a>
				</li>
				<li>
					<a href="">Google</a>
				</li>
				<li>
					<a href="">Instagram</a>
				</li>
				<li>
					<a href="">LinkedIn</a>
				</li>
				<li>
					<a href="">Pinterest</a>
				</li>
			</ul>
			
			<?php
			$args = array(
				'container' => 'ul',
				'menu_class' => 'footer-menu',
				'theme_location' => 'footer'
			);
			wp_nav_menu($args);
			?>
			
			<small>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus commodi cumque debitis ea eligendi enim eum explicabo facilis iusto laboriosam maiores mollitia nihil odit officia similique, ullam vero vitae voluptatum!
			</small>
		</div>
	</footer>

	<?php wp_footer(); ?>

</body>
</html>
