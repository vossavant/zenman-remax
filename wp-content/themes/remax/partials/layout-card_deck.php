<?php
include 'whitespace.php';

switch ($card_count = count(get_sub_field('cards'))) :
	case 1:
		$column_width = 6;
		$card_margin = 0;
		break;
		
	case 2:
		$column_width = 10;
		$card_margin = 5;
		break;
	
	case 3:
		$column_width = 12;
		$card_margin = 3;
		break;
endswitch;

if (have_rows('cards')) : ?>
	
	<div class="row justify-content-center<?= $whitespace; ?>">
		<div class="card-deck col-<?= $column_width; ?>">
	
			<?php while (have_rows('cards')) :
				the_row(); ?>
				
				<div class="card border-0 mx-<?= $card_margin; ?> rounded-0 shadow">
					<div class="card-body pt-4 px-5 pb-5">
						<h3 class="card-title mb-4 text-center"><?php the_sub_field('card_title'); ?></h3>
						
						<?php if ($card_image_url = get_sub_field('card_image')) : ?>
							<img class="d-block mx-auto" src="<?= $card_image_url; ?>" width="120">
						<?php endif; ?>
						
						<p class="card-text my-3"><?php the_sub_field('card_text'); ?></p>
						
						<?php if ($card_button_url = get_sub_field('card_button_url')) : ?>
							<div class="mt-4 text-center">
								<a href="<?= $card_button_url; ?>" class="btn btn-primary"><?php the_sub_field('card_button_text'); ?></a>
							</div>
						<?php endif; ?>
					</div>
				</div>
		
				<?php
			endwhile;
			?>
			
		</div>
	</div>
	
	<?php
endif;