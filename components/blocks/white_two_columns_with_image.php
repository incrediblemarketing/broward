<?php

$image   = get_sub_field( 'image' );
$content = get_sub_field( 'column_2' );
?>

<div class="container">
	<div class="row align-items-center">
		<div class="col-lg-6 left--column">
			<div class="image__holder">
				<?php if ( $image ) : ?>
					<img src="<?php echo esc_url( $image['sizes']['parent_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php else : ?>
					<?php im_the_placeholder_image( 'parent_thumb', '' ); ?>
				<?php endif; ?>	
			</div>
		</div>
		<div class="col-lg-6">
			<?php echo $content; ?>
		</div>
	</div>
</div>
