<div class="ct-container" <?php echo blocksy_get_v_spacing() ?>>
	<section class="ct-no-results">

		<section class="hero-section" data-type="type-1">
			<header class="entry-header">
				<h1 class="page-title" itemprop="headline">
					<?php esc_html_e( '404 - Sidan kan inte hittas', 'blocksy' ); ?>	
				</h1>

				<div class="page-description">
					<?php esc_html_e( 'Sök efter önskad produkt nedan: ', 'blocksy' ); ?>
				</div>
			</header>
		</section>

		<div class="entry-content">
			<?php get_search_form(); ?>
		</div>

	</section>
</div>