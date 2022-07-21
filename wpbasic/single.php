<?php 
	get_header();
 ?>
 <div class="container">
 	<div class="row py-5">
 		<div class="col-lg-8 offset-lg-2">
		 	<div class="card">
			  <?php the_post_thumbnail('full', [ 'class' => 'card-img-top img-fluid' ]); ?>
			  <div class="card-body">
			  	<h2><?php the_title(); ?></h2>
			    <p class="card-text"><?php the_content(); ?></p>
			  </div>
			</div>
 		</div>
 	</div>
 	<div class="row py-5">
 		<div class="col-lg-8 offset-lg-2">
 			<div class="group-link d-flex justify-content-between align-items-center">
 				<div class="btn btn-dark post-prev-btn"><?php previous_post_link(); ?></div>
 				<div class="btn btn-info post-next-btn"><?php next_post_link();?></div>
 				
 			</div>
 		</div>
 	</div>
 </div>

 <?php get_footer(); ?>