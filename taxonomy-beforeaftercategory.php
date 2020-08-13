<?php
/**
 * Taxonomy Before After Category
 */


get_header();
?>
<section class="gallery--page">
	<div class="container">
		<div class="row">
		  <div class="col-12">
			<h2><?php echo single_term_title(); ?></h2>
			<div class="card__gallery card__gallery--horizontal">
	  <?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				echo '<div class="card--display">';
				echo '<a class="flex--gallery" href="' . get_the_permalink() . '">';
				echo '<div class="image__area">';
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
				echo '</div>';
				echo '<div class="description__area">';
				echo '<h3>' . get_the_title() . '</h3>';
				echo '<p class="line" data-toggle="open-case"><i class="fa fa-long-arrow-right"></i></p>';
				echo '</div>';
				echo '</a></div>';
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
