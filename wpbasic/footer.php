	<div class="wpbasic-footer">
		<div class="container">
			<div class="row text-light py-5 g-5">
				<div class="col-lg-3">
					<?php
					if( is_active_sidebar( 'footer-1' ) ) {
						dynamic_sidebar( 'footer-1' );
					}
					?>
				</div>
				<div class="col-lg-3">
					<?php
					if( is_active_sidebar( 'footer-2' ) ) {
						dynamic_sidebar( 'footer-2' );
					}
					?>
				</div>
				<div class="col-lg-3">
					<?php
					if( is_active_sidebar( 'footer-3' ) ) {
						dynamic_sidebar( 'footer-3' );
					}
					?>
				</div>
				<div class="col-lg-3">
					<?php
					if( is_active_sidebar( 'footer-4' ) ) {
						dynamic_sidebar( 'footer-4' );
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>
</body>
</html>