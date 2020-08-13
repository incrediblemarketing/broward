<?php
	$procedure     = get_sub_field( 'procedure' );
	$left_or_right = get_sub_field( 'left_or_right' );
?>

<div class="row justify-content-center">
	<div class="col-xl-10">
		<h2><?php echo get_the_title( $procedure ); ?><strong>Procedures</strong></h2>
	</div>
</div>
<?php if ( ! $left_or_right ) : ?>
	<div class="row">
<?php else : ?>
	<div class="row flex-row-reverse">
		<img src="/wp-content/uploads/2020/08/watermark-logo.png" class="watermark"/>
<?php endif; ?>
	<div class="col-xl-8 col-md-6">
		<div class="image__holder">
			<?php echo get_the_post_thumbnail( $procedure, 'post_large' ); ?>
		</div>
	</div>
	<div class="col-xl-3 offet-lg-1 col-md-6">
		<?php
			$procedures = get_pages(
				array(
					'post_type'   => 'procedure',
					'child_of'    => $procedure,
					'sort_column' => 'menu_order',
					'sort_order'  => 'ASC',
				)
			);
			echo '<ul>';
			foreach ( $procedures as $page ) {
				echo '<li><a href="' . get_the_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a></li>';
			}
			echo '</ul>';
			?>
	</div>
</div>
