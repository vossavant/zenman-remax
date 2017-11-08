<?php
$form = get_sub_field('form');
$icon = get_sub_field('icon');
?>

<div class="row">
	<div class="col col-9 mx-auto text-center">
		<?php if ($form == 'lead-capture') : ?>
			<h1 class="mb-4 text-center">
				<?php if ($icon) : ?>
					<img class="mr-3" src="<?= $icon; ?>" width="85">
				<?php endif; ?>
				<?php the_sub_field('title'); ?>
			</h1>
		
		<?php elseif ($form == 'search') : ?>
			<h1 class="d-flex align-items-end justify-content-center">
				<?php if ($icon) : ?>
					<img src="<?= $icon; ?>" width="85">
				<?php endif; ?>
				
				<?php the_sub_field('title'); ?>
			</h1>
		<?php endif; ?>
		
		<?php if ($subtitle = get_sub_field('subtitle')) : ?>
			<h2 class="font-weight-bold mb-4 pb-4 red-hash red-hash-after red-hash-center red-hash-wide"><?= $subtitle; ?></h2>
		<?php endif; ?>

		<?php if ($text = get_sub_field('text')) : ?>
			<div class="mb-4">
				<?= $text; ?>
			</div>
		<?php endif; ?>
		
		<?php if ($form == 'lead-capture') : ?>
			<form class="form-inline justify-content-center mb-2">
				<div class="form-group">
					<label for="name" class="sr-only">Name</label>
					<input type="text" class="form-control px-3" id="name" placeholder="Name">
				</div>
				<div class="form-group mx-3">
					<label for="email" class="sr-only">Email</label>
					<input type="email" class="form-control px-3" id="email" placeholder="Email">
				</div>
				<button type="submit" class="btn btn-primary">Learn More</button>
			</form>
		
		<?php elseif ($form == 'search') : ?>
			<div id="remax_search1" class="remax_search mx-auto w-75"></div>
		<?php endif; ?>
	</div>
</div>