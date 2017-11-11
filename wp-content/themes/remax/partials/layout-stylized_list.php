<?php
include 'whitespace.php';

if (have_rows('list_items')) :
	?>
			<ol class="row<?= $whitespace; ?> justify-content-between list-stylized list-unstyled mb-0">
				<?php
				while (have_rows('list_items')) :
					the_row();
					?>
					<li class="col-12 col-sm-6 pt-0">
						<p class="mb-0 pt-2 red-hash"><?php the_sub_field('content'); ?></p>
					</li>
					<?php
				endwhile;
				?>
			</ol>
<?php endif; ?>