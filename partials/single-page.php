<?php
$title = get_the_title( $post->ID );
$content = get_the_content( '', false, $post->ID );
$image = get_the_post_thumbnail_url( $post->ID, 'large' );
$date = get_the_date( 'm.d.Y', $post->ID );
$author = get_the_author_meta( 'display_name', $post->post_author );

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post(); ?>
		<section class="page">
			<div class="page__container">
				<div class="page__content">
					<?php the_content() ?>
				</div>
			</div>
		</section>
		<?php
	endwhile;
endif;


