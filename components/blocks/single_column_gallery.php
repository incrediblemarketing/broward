<?php

	$section_title = get_sub_field( 'title' );
	$gallery       = get_sub_field( 'gallery' );
?>

<div class="row section__padding justify-content-center">
	<div class="col-xl-6 col-lg-10 col-12">
	<h2><?php echo esc_attr( $section_title ); ?></h2>
		<?php if ( $gallery ) : ?>
		<div class="swiper-container single--gallery-swiper">
			<div class="swiper-wrapper">
					<?php foreach ( $gallery as $image ) : ?>
							<div class="swiper-slide">
											<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
							</div>
					<?php endforeach; ?>
			</div>
			<div class="swiper-button-next"><i class="fal fa-arrow-right"></i></div>
			<div class="swiper-button-prev"><i class="fal fa-arrow-left"></i></div>
		</div>
		<?php endif; ?>
	</div>
</div>
