<?php
global $post;
global $wp_query;

$post_type = $post->post_type ?? $wp_query->query_vars['post_type'];

get_template_part( 'partials/layout', 'header' );


if ( is_home() || is_archive() ) :
	get_template_part( 'partials/archive', $post_type );
else :
	get_template_part( 'partials/single', $post_type );
endif;

get_template_part( 'partials/layout', 'offcanvas' );
get_template_part( 'partials/layout', 'footer' );
