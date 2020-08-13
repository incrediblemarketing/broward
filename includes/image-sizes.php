<?php

add_image_size( 'blog_preview_thumb', 271, 300, true );
add_image_size( 'featured_thumb', 500, 688, true );
add_image_size( 'parent_thumb', 972, 763, true );
add_image_size( 'background_thumb', 1430, 569, true );
add_image_size( 'hero_thumb', 1920, 1080, true );
add_image_size( 'page_header_thumb', 1920, 548, true );
add_image_size( 'blog_row_thumb', 370, 223, true );
add_image_size( 'post_large', 1257, 800, true );

function im_image_sizes( $sizes ) {
	return array_merge(
		$sizes,
		array(
			'blog_preview_thumb' => __( 'Blog Preview Thumbnail' ),
			'featured_thumb'     => __( 'Featured Thumbnail' ),
			'parent_thumb'       => __( 'Parent Thumbnail' ),
			'background_thumb'   => __( 'Background Thumbnail' ),
			'hero_thumb'         => __( 'Hero Thumbnail' ),
			'page_header_thumb'  => __( 'Page Header Thumbnail' ),
			'blog_row_thumb'     => __( 'Blog Row Thumbnail' ),
			'post_large'         => __( 'Post Large' ),
		)
	);
}
add_filter( 'image_size_names_choose', 'im_image_sizes' );

function im_get_placeholder_image( $size = full, $class = '', $bg_color = '252525', $text_color = 'FFFFFF' ) {
	$image_sizes  = im_get_all_image_sizes();
	$image_height = $image_sizes[ $size ]['height'];
	$image_width  = $image_sizes[ $size ]['width'];
	ob_start(); ?>
	<img class="<?php echo $class; ?>" src="//placehold.it/<?php echo $image_width; ?>x<?php echo $image_height; ?>/<?php echo $bg_color; ?>/<?php echo $text_color; ?>" alt="">
	   <?php
		return ob_get_clean();
}

function im_the_placeholder_image( $size = full, $class = '', $bg_color = '252525', $text_color = 'FFFFFF' ) {
	echo im_get_placeholder_image( $size, $class, $bg_color, $text_color );
}


function im_get_all_image_sizes() {
	 global $_wp_additional_image_sizes;
	$image_sizes = array(
		'blog_preview_thumb' => array(
			'width'  => 290,
			'height' => 175,
		),
		'featured_thumb'     => array(
			'width'  => 535,
			'height' => 402,
		),
		'parent_thumb'       => array(
			'width'  => 715,
			'height' => 715,
		),
		'background_thumb'   => array(
			'width'  => 1430,
			'height' => 569,
		),
		'blog_row_thumb'     => array(
			'width'  => 370,
			'height' => 223,
		),
		'post_large'         => array(
			'width'  => 1430,
			'height' => 796,
		),
	);
	return array_merge( $image_sizes, $_wp_additional_image_sizes );
}
