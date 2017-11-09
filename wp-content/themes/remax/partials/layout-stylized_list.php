<?php if (have_rows('list_items')) : ?>
	<div class="row">
		<div class="col">
			<ol class="d-flex flex-wrap justify-content-between list-stylized list-unstyled mb-0">
				<?php
				while (have_rows('list_items')) :
					the_row();
					?>
					<li class="pt-0">
						<p class="pt-2 red-hash"><?php the_sub_field('content'); ?></p>
					</li>
					<?php
				endwhile;
				?>
			</ol>
		</div>
	</div>
<?php endif; ?>