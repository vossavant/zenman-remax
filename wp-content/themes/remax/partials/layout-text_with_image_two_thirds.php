<?php
include 'whitespace.php';

if ($whitespace) : ?>
	<div class="<?= trim($whitespace); ?>">
<?php endif; ?>
	
	<div class="row">
		<div class="col">
			<h1 class="mb-5 text-center"><?php the_sub_field('title'); ?></h1>
		</div>
	</div>
	<div class="row">
		<?php if (get_sub_field('image_alignment')) : ?>
			<div class="col-12 col-md-8">
				<?php the_sub_field('content'); ?>
			</div>
			<div class="col-12 col-md-4">
				<img class="mb-2 mw-100" src="<?php the_sub_field('image'); ?>">
			</div>
		<?php else: ?>
			<div class="col-12 col-md-4">
				<img class="mb-2 mw-100" src="<?php the_sub_field('image'); ?>">
			</div>
			<div class="col-12 col-md-8">
				<?php the_sub_field('content'); ?>
			</div>
		<?php endif; ?>
	</div>

<?php if ($whitespace) : ?>
	</div>
<?php endif; ?>