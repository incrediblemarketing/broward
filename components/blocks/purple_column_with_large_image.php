<?php

$image         = get_sub_field( 'background_image' );
$section_title = get_sub_field( 'title' );
$content       = get_sub_field( 'content' );
$content_2     = get_sub_field( 'content_2' );
$contact     = get_sub_field( 'contact_block' );

if($contact){
	$is_contact = 'contact';
}
?>

<div class="image__holder">
	<?php if ( $image ) : ?>
		<img src="<?php echo esc_url( $image['sizes']['hero_thumb'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
	<?php else : ?>
		<?php im_the_placeholder_image( 'hero_thumb', '' ); ?>
	<?php endif; ?>	
</div>

<div class="container">
	<div class="row purple--area">
			<div class="col-12 <?php echo $is_contact; ?>">
				<h2><?php echo $section_title; ?></h2>
			</div>
			<?php if ( $content_2 ) : ?>
				<div class="col-lg-6">
					<?php echo $content; ?>
				</div>
				<div class="col-lg-6">
					<?php echo $content_2; ?>
				</div>
			<?php else : ?>
				<div class="col-12">
					<?php echo $content; ?>
				</div>
			<?php endif; ?>
		</div>
</div>
