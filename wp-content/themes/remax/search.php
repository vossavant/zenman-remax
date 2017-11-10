<?php get_header(); ?>

<div class="container my-5 mx-auto">
	<div class="row">
		<section class="col-8">
			<h1>Search Results</h1>
			<?php if ($total_results = $wp_query->found_posts) : ?>
				<h4>Your search for &ldquo;<b><?= get_search_query(); ?></b>&rdquo; returned <?= $total_results . ( $total_results != 1 ? ' results' : ' result' ); ?></h4>
			<?php endif; ?>
			
			<div class="mt-4">
				<p>Not what you're looking for? Try another search:</p>
				<?= get_search_form(); ?>
			</div>
			
			<?php if (have_posts()) : ?>
				
				<div class="gallery mx-0 pt-5">
				
					<?php while (have_posts()) : the_post(); ?>
					
						<article class="d-flex mb-5 search-result">
							<div class="gallery-image-mask mr-4 position-relative">
								<a href="<?php the_permalink(); ?>">
									<img class="mw-100" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-small'); ?>">
								</a>
							</div>
							<div class="w-75">
								<h1 class="h4">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<p class="mb-0"><?= get_the_excerpt(); ?></p>
							</div>
						</article>
						
					<?php endwhile; ?>
			
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
				<div class="message warning">
					<i class="material-icons">warning</i>
					<div>
						<h5>Bummer!</h5>
						<p>No results for <b><?= get_search_query(); ?></b>. Please try a different search or <a
									href="<?= home_url(); ?>">return to the home page</a>.</p>
					</div>
				</div>
			<?php endif; ?>
		</section>
		
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer();