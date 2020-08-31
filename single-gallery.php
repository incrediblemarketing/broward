<?php
/**
 * Single Page Gallery Template
 */

global $post;
get_header();
?>
<section class="gallery--page">
	<div class="container">
		<div class="row">
		  <div class="col-12">
			<?php $terms = get_the_terms( $post->ID, 'beforeaftercategory' ); ?>
	  <h2><?php echo $terms[0]->name; ?></h2>
			<div class="card__gallery card__gallery--horizontal">
	  <?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
								echo '<div class="card--display card--single">';
								echo '<div class="image__area">';
								$images = get_field( 'gallery_images' );
				if ( $images ) :
					$counter = 0;
					foreach ( $images as $image ) :
						if ( $counter % 2 === 0 ) :
							echo '<div class="ba__holder"><div class="item"><img src="' . $image['sizes']['large'] . '"/></div>';
						else :
							echo '<div class="item"><img src="' . $image['sizes']['large'] . '"/></div></div>';
						endif;
						$counter++;
					endforeach;
								endif;
				echo '</div>';
				echo '<div class="description__area">';
					echo '<h3>' . get_the_title() . '</h3>';
					echo get_the_content();
				echo '</div>';
				echo '</div>';
			endwhile;
		endif;
		?>
				</div>
		</div>
		</div>
		<?php get_sidebar( 'gallery' ); ?>
	</div>
</section>

<?php get_footer(); ?>
