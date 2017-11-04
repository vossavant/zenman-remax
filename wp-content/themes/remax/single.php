<?php
get_header();
?>

<div class="container my-5 mx-auto">
	<div class="row">
		<section class="col-8">
			<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/house-2.jpg">
			<div class="single-post-meta d-flex justify-content-between my-3">
				<?php get_template_part('partials/blog-post-social'); ?>
				<time class="" datetime="">11.3.17</time>
			</div>
			
			<article class="single-post-content pt-3">
				<h1>Post Title</h1>
				<p>Quis taciti nulla curabitur augue augue eros at taciti. Donec convallis sed. Urna ut quam tristique dictumst mauris. In in vulputate ut ante sit est sed turpis. Lorem diam conubia augue mauris turpis mauris vitae accumsan. Massa sapien donec consequat vestibulum ultrices. Eget dui urna quis augue nec. Egestas nec blandit vel justo eget. Duis massa nulla. Et fusce lobortis duis turpis blandit. Diam vehicula sit lectus id nulla quo accumsan at. Augue ac sed. Nisl nunc maecenas a dis fusce gravida lorem justo. Fermentum porta nec. Tincidunt fringilla aptent.</p>
				<p>Mauris in aenean. Justo dolor erat. Nulla massa vestibulum. Interdum eu accumsan. Porttitor urna aliquet dui tincidunt quis. Sit non justo. Urna ultrices vitae sed fames at proin non in auctor erat vestibulum. Ipsum aliquam magna commodo elit a. Consectetuer quis nullam. Urna con praesent purus neque risus metus nunc vitae vehicula tempore at vestibulum lectus vestibulum turpis nulla fames.</p>
				<p>A et ultricies augue nonummy enim. Id ipsum erat. Sodales eleifend libero. Purus neque ipsum eleifend ligula lacus vulputate morbi quam mi mauris dictumst netus sem vestibulum. Integer lorem eu donec sed harum. A integer aliquet fusce lacus cursus. Ornare sed justo tristique pharetra arcu pede ut in penatibus eget ridiculus. Turpis ac ut ac imperdiet dui. Erat est lectus a mollis vestibulum. Varius id posuere. Orci nulla quis. Pede pede interdum porta quisque enim turpis pellentesque tempore. Sed aliquet phasellus. Erat donec scelerisque. Erat purus ante lacus ut a dapibus sapien atque quis consequat donec. Diam massa at. Amet platea venenatis. Elit purus facilisi. Libero id habitasse ut nec eum. Diam sed sed. Donec eget euismod. Felis lectus mattis in enim nec non posuere euismod magna vitae est odio commodo velit augue tristique vel sociosqu nec commodo. Ornare dolor pharetra. Vel aenean id a turpis aliquam. Magna laoreet libero.</p>
			</article>

			<div class="single-post-meta mt-3 pt-3">
				<div class="single-post-author pb-2">Author Name</div>
				<div class="pb-2">
					<span class="single-post-category position-relative mr-3 pr-3">
						<a href="">Category</a>
					</span>
						<span class="single-post-tags ml-1">
						<a href="">Tag 1</a>, <a href="">Tag 2</a>, <a href="">Tag 3</a>
					</span>
				</div>
				<?php get_template_part('partials/blog-post-social'); ?>
			</div>
			
			<?php comments_template(); ?>
		</section>
		
		<?php get_sidebar(); ?>
	</div>
</div>

<?php
get_footer();