<?php get_header(); ?>

<div class="container my-2 my-md-4 py-2 mx-auto">
	<div class="row">
		<section class="col-12 col-md-8">
			<h1><?php the_archive_title(); ?></h1>
			
			<?php if (have_posts()) : ?>
				
				<div class="gallery mx-0 pt-3 pt-lg-4">
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
				<p>There are no posts in <b><?php the_archive_title(); ?></b>.</p>
			<?php endif; ?>
		</section>
		
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer();