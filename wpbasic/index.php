<?php
	get_header();
?>
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-8">
				<div class="row">
				<?php get_template_part( 'templates/content', 'page' ); ?>
				</div>
			</div>
			<div class="col-lg-4">
				<?php get_template_part( 'templates/content', 'sidebar' ); ?>
			</div>
		</div>
	</div>
<?php
	get_footer();
?>