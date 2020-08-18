<?php

$post_id = get_the_id();

if ( is_home() ) {
	$post_id = get_option( 'page_for_posts' );
}

$page_title = get_the_title( $post_id );
if ( is_single() && 'team_member' == get_post_type( $post_id ) ) {
	$page_title = 'Staff';
}

$background_image = get_field( 'header_image', $post_id ) ?: get_field( 'header_image', 'options' );

if ( is_post_type_archive( 'gallery' ) || is_singular( 'gallery' ) || is_tax( 'beforeaftercategory' ) ) :
	$background_image = get_field( 'gallery_header_image', 'options' );
endif;

if ( is_home() || is_singular( 'post' ) ) :
	$background_image = get_field( 'blog_header_image', 'options' );
endif;
?>

<header class="page-header">
	<div class="image__holder">
		<?php if ( $background_image ) : ?>
	  <img src="<?php echo esc_url( $background_image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $background_image['alt'] ); ?>" />
	<?php else : ?>
		<?php im_the_placeholder_image( 'hero_thumb', '' ); ?>
	<?php endif; ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>
					<?php if ( is_home() ) : ?>
						News & Updates
					<?php elseif ( is_post_type_archive( 'gallery' ) || is_singular( 'gallery' ) || is_tax( 'beforeaftercategory' ) ) : ?>
						Before & After Gallery
					<?php elseif ( is_category() ) : ?>
						Category: <?php single_cat_title(); ?>
					<?php elseif ( is_archive() ) : ?>
						Archive: <?php the_archive_title(); ?>
					<?php elseif ( is_search() ) : ?>
						Search<br><small>
							<?php
								$allsearch = new WP_Query( "s=$s&showposts=-1" );
								$key       = esc_html( $s, 1 );
								$count     = $allsearch->post_count;
								echo $count . ' ';
								_e( 'results for ', 'responsive' );
								_e( '<span class="post-search-terms">', 'responsive' );
								echo '&ldquo;';
								echo $key;
								echo '&rdquo;';
								_e( '</span><!-- end of .post-search-terms -->', 'responsive' );
								wp_reset_query();
							?>
						</small>
					<?php else : ?>
						<?php the_title(); ?>
					<?php endif; ?>
				</h1>
			</div>
		</div>
	</div>
</header>
