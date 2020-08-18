<?php

	$image   = get_sub_field( 'image' );
	$column2 = get_sub_field( 'column_2' );
?>

<div class="row section__padding justify-content-center">
  <div class="col-lg-6 col-xl-5">
	<div class="image__holder fade-in-left">
	  <?php if ( $image ) : ?>
		<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	  <?php endif; ?>
	</div>
  </div>
  <div class="col-lg-6 col-xl-5">
	<div class="content__holder fade-in-right">
	  <?php echo $column2; ?>
	</div>
  </div>
</div>
