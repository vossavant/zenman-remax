<div class="row">
	<div class="col">
		<h1 class="mb-5 text-center"><?php the_sub_field('title'); ?></h1>
	</div>
</div>
<div class="row">
	<?php if (get_sub_field('image_alignment')) : ?>
		<div class="col-6">
			<?php the_sub_field('content'); ?>
		</div>
		<div class="col-6">
			<img class="mb-2 mw-100" src="<?php the_sub_field('image'); ?>">
		</div>
	<?php else: ?>
		<div class="col-6">
			<img class="mb-2 mw-100" src="<?php the_sub_field('image'); ?>">
		</div>
		<div class="col-6">
			<?php the_sub_field('content'); ?>
		</div>
	<?php endif; ?>
</div>