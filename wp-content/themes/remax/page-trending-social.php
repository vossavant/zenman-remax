<?php
/**
 * Template Name: Trending on Social
 *
 * Shows a list of curated posts that are ostensibly
 * trending on social. A temporary stopgap until
 * an automated way of tracking clicks on social media
 * icons is built out.
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

			if ($trending_on_social_posts = get_field('social_trending_posts', 'option')) : ?>
				<div class="gallery mx-0 pt-5">
					<?php
					foreach ($trending_on_social_posts as $post) :
						setup_postdata($post);
						get_template_part('partials/blog-post-search');
					endforeach;
					?>
				</div>
			<?php else: ?>
				<div class="message warning">
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