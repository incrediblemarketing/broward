<?php
/**
 * Archive Before After Gallery
 */


get_header();
?>

<section class="gallery--page">
	<div class="container">
		<div class="row">
		  <div class="col-12">
					<?php
						$taxonomy_name = 'beforeaftercategory';
						$custom_terms  = get_terms(
							array(
								'taxonomy' => $taxonomy_name,
								'parent'   => 0,
								'orderby'  => 'term_order',
							)
						);
						$i             = 0;
						foreach ( $custom_terms as $custom_term ) {
							$termchildren = get_terms(
								array(
									'taxonomy' => $taxonomy_name,
									'parent'   => $custom_term->term_id,
									'orderby'  => 'term_order',
								)
							);
								echo '<h2>' . $custom_term->name . '</h2>';
								echo '<div class="card__gallery">';
							foreach ( $termchildren as $child ) {
								$term = get_term_by( 'id', $child, $taxonomy_name );

								$firstposts = get_posts(
									array(
										'showposts'   => -1,
										'post_type'   => 'gallery',
										'post_status' => 'published',
										'tax_query'   => array(
											array(
												'taxonomy' => $taxonomy_name,
												'field'    => 'slug',
												'terms'    => $child->slug,
											),
										),
									)
								);

									echo '<div class="card--display">';
									echo '<a href="' . get_term_link( $child, $taxonomy_name ) . '">';
									$postcount = 0;
								foreach ( $firstposts as $post ) :
									setup_postdata( $post );
									if ( $postcount < 1 ) :
												echo '<div class="ba__holder">';
												$images = get_field( 'gallery_images' );
										if ( $images ) :
											$counter = 0;
											foreach ( $images as $image ) :
												if ( $counter < 2 ) :
													echo '<div class="item"><img src="' . $image['sizes']['thumbnail'] . '"/></div>';
													endif;
													$counter++;
											endforeach;
													endif;
												echo '</div>';
										endif;
											$postcount++;
										endforeach;
										wp_reset_postdata();
										echo '<div class="bottom-link">';
											echo '<h3>' . $child->name . '</h3>';
											echo '<div class="line"></div>';
											echo '<i class="fa fa-long-arrow-right"></i>';
										echo '</div>';
										echo '<p>' . $postcount . ' cases</p>';
										echo '</a></div>';
							}
								echo '</div>';
						}
						?>
			</div>
		</div>
		<?php get_sidebar( 'gallery' ); ?>
	</div>
</section>

<?php get_footer(); ?>
