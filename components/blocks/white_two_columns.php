<?php

$content       = get_sub_field( 'column_1' );
$content_2     = get_sub_field( 'column_2' );
$section_title = get_sub_field( 'title' );
?>

<div class="container">
	<div class="row">
		<?php if ( $section_title ) : ?>
			<div class="col-12">
				<h2><?php echo $section_title; ?></h2>
			</div>
		<?php endif; ?>
		<div class="col-lg-6 left--column">
			<?php echo $content; ?>
		</div>
		<div class="col-lg-6">
			<?php echo $content_2; ?>
		</div>
	</div>
</div>
