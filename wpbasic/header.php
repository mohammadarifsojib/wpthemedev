<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wpbasic-main-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<?php
						if( get_header_image() ) :
						?>
					    <a class="navbar-brand" href="<?php echo site_url('/'); ?>">
					    <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ) ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					    </a>
						<?php endif; ?>
					    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					      <span class="navbar-toggler-icon"></span>
					    </button>
					    <div class="collapse navbar-collapse" id="navbarSupportedContent">
					      <?php				      
					      wp_nav_menu( array(
					      	'theme_location'	=> 'primary',
					      	'menu_class'		=> 'navbar-nav mr-auto mb-2 mb-lg-0',
					      	'container_class'	=> 'collapse navbar-collapse justify-content-end align-items-center wpbasic-primary-menu',
					      	'container_id'		=> 'navbarSupportedContent',
					      ) );
					      ?>
					  </div>
					</nav>
				</div>
			</div>
		</div>
	</div>