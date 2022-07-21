<?php
$args = array( 
	'post_type'			=> 'post',
	'posts_per_page'	=> 6,
 );
$posts = new WP_Query( $args );
if( $posts->have_posts() ) {
	while( $posts->have_posts() ) : $posts->the_post();
		?>
			<div class="col-lg-6 mb-4">
				<div class="card">
					<?php the_post_thumbnail('full', [ 'class'	=> 'card-img-top img-fluid' ]); ?>
				  <div class="card-body">
				  	<a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333;">
				    	<h5 class="card-title"><?php the_title(); ?></h5>
				    </a>
				    <p class="card-text"><?php echo wp_trim_words( get_the_content(), 20, '....' ); ?></p>
				    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
				  </div>
				</div>
			</div>
		<?php
	endwhile;
}

?>
