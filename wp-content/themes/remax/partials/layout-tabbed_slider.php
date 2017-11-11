<?php
include 'whitespace.php';

$tab_slider_title = get_sub_field('title');

if (have_rows('tabs')) : ?>
	<div class="row<?= $whitespace; ?>">
		<div class="col">
			<h1 class="mb-2 mb-md-4 text-left text-md-center"><?= $tab_slider_title; ?></h1>

			<div class="tab-slider mt-md-5">
				<?php
				$tab_number = 1;
				$tab_radio_inputs = $tab_labels = $tab_panes = null;
				
				while (have_rows('tabs')) :
					the_row();
					$tab_label = get_sub_field('label');
				
					$tab_radio_inputs .=
						'<input class="tab-slider-input d-none" id="tab-' . $tab_number . '" name="tabs" type="radio"' . (($tab_number == 1) ? ' checked' : '' ) . '>';
					$tab_labels .=
						'<label class="tab-slider-label position-relative m-0 pb-3 px-4" for="tab-' . $tab_number . '">
							<img class="tab-slider-icon mb-3" src="' . get_sub_field('icon') . '">
							<h4>' . $tab_label . '</h4>
						</label>';
					$tab_panes .=
						'<div class="tab-slider-content float-left" id="tab-pane-' . $tab_number . '">
							<div class="mx-auto w-75" data-tab-label="' . $tab_label . '">' . get_sub_field('content') . '</div>
						</div>';
					
					$tab_number++;
				endwhile;
				
				echo $tab_radio_inputs;
				?>
	
				<div class="tab-slider-tabs d-flex mb-md-4 text-center">
					<?= $tab_labels; ?>
				</div>
	
				<div class="tab-slider-panes overflow-hidden">
					<div>
						<?= $tab_panes; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>