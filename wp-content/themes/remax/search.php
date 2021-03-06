<?php get_header(); ?>

<div class="container my-2 my-md-4 py-2 mx-auto">
	<div class="row">
		<section class="col-12 col-md-8">
			<h1>Search Results</h1>
			<?php if ($total_results = $wp_query->found_posts) : ?>
				<h4>Your search for &ldquo;<b><?= get_search_query(); ?></b>&rdquo; returned <?= $total_results . ( $total_results != 1 ? ' results' : ' result' ); ?></h4>
			<?php endif; ?>
			
			<div class="mt-4">
				<p>Not what you're looking for? Try another search:</p>
				<?= get_search_form(); ?>
			</div>
			
			<?php if (have_posts()) : ?>
				
				<div class="gallery mx-0 pt-4 pt-lg-5">
					<?php
					while (have_posts()) :
						the_post();
						get_template_part('partials/blog-post-search');
					endwhile;
					?>
				</div>
				
				<?php
				the_posts_pagination(
					array(
						'mid_size'  => 2,
						'next_text' => '&rsaquo;',
						'prev_text' => '&lsaquo;'
					)
				);
				?>
			
			<?php else: ?>
				<h3 class="mt-5">Bummer!</h3>
				<p>No results for <b><?= get_search_query(); ?></b>. Please try a different search or <a href="<?= home_url(); ?>">return to the home page</a>.</p>
			<?php endif; ?>
		</section>
		
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer();