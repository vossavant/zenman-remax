<?php
if ($images = get_sub_field('gallery')) :
	include 'whitespace.php';
	?>
	<div class="row<?= $whitespace; ?>">
		<div class="col">
			<h1 class="mb-4 text-center"><?php the_sub_field('title'); ?></h1>
			<div class="gallery d-flex flex-wrap">
				
				<?php foreach ($images as $image) : ?>
					
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?= $image['sizes']['gallery-large']; ?>">
						</div>
						<figcaption>
							<?php
							if ($image['title']) {
								echo '<h4>' . $image['title'] . '</h4>';
							}
							
							if ($image['description']) {
								echo '<p>' . $image['description'] . '</p>';
							}
							
							// <a class="btn btn-primary" href="">Learn More</a>
							?>
						</figcaption>
					</figure>
				<?php endforeach; ?>
				
				<div class="current-photo-details d-none m-2 w-100" data-js-closeable="true">
					<div class="js-photo-box p-5 w-50"></div>
					<div class="js-photo-details-box pt-5 pr-5 pb-5 pl-2 w-50"></div>
					<button class="js-close-photo-details btn btn-close rounded-circle">X</button>
				</div>
				<figure class="gallery-placeholder m-0">&nbsp;</figure>
			</div>
		</div>
	</div>
<?php endif; ?>