<?php
/**
 * Template Name: Trending
 *
 * Shows a list of the 10 most viewed blog posts
 * according to the WP Popular Posts plugin.
 */
get_header();
?>

<div class="container my-5 mx-auto">
	<div class="row">
		<section class="col-8">
			<?php
			if (have_posts()) :
				while (have_posts()) :
					the_post();
					echo '<h1>' . get_the_title() . '</h1>';
					the_content();
				endwhile;
			endif;
			
			$popular_posts = remax_get_popular_posts(10);

			if ($popular_posts->have_posts()) : ?>
				<div class="gallery mx-0 pt-5">
					<?php
					while ($popular_posts->have_posts()) :
						$popular_posts->the_post();
						get_template_part('partials/blog-post-search');
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			<?php else: ?>
				<div class="message warning">
					<i class="material-icons">warning</i>
					<div>
						<h5>Bummer!</h5>
						<p>No popular posts!</p>
					</div>
				</div>
			<?php endif; ?>
		</section>
		
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer();