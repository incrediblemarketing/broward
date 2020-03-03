<?php
	$copyright    = get_field( 'copyright', 'option' );
	$address      = get_field( 'business_street_address', 'option' );
	$address2     = get_field( 'business_city_state_zip', 'option' );
	$addressLink  = get_field( 'business_address_link', 'option' );
	$phone        = get_field( 'business_phone_display', 'option' );
	$phoneURL     = get_field( 'business_phone_url', 'option' );
	$phone_ent    = get_field( 'business_phone_display_ent', 'option' );
	$phoneURL_ent = get_field( 'business_phone_url_ent', 'option' );
	$footerbg     = get_field( 'footer_background_image', 'option' );
?>

	<footer class="footer row justify-content-center " data-bg-image="<?php echo $footerbg; ?>">
		<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="contact__holder contact__spacer">
				<div class="inner__padding">
					<?php if ( $addressLink && $address && $address2 ) : ?>
					<p><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?><br/>
						<?php echo $address2; ?></a></p>    
					<a href="<?php echo $addressLink; ?>" target="_blank" class="btn btn-primary">Get directions</a>
					<?php endif; ?>
				</div>
				<hr/>
				<div class="inner__padding">
					<?php if ( $phoneURL && $phone ) : ?>
						<p><i class="fas fa-phone"></i> <?php echo $phone; ?></p>
					<?php endif; ?>
					<a href="tel:<?php echo $phoneURL; ?>" class="btn btn-primary">Call us</a>
					</div>
				<div class="inner__padding">
					<?php if ( $phoneURL_ent && $phone_ent ) : ?>
						<p><i class="fas fa-phone"></i> <?php echo $phone_ent; ?></p>
					<?php endif; ?>
					<a href="tel:<?php echo $phoneURL_ent; ?>" class="btn btn-primary">Call ENT</a>
				</div>
				<hr/>
				<?php get_template_part( 'components/social-icons' ); ?>
			</div>
		</div>
		<div class="col-xl-7 col-lg-6 col-md-6">
			<div class="contact__holder contact__holder--padding">
				<?php echo do_shortcode( '[gravityforms id="1" title="false" description="false" ajax="true"]' ); ?>
			</div>
		</div>
		<div class="col-12 copyright text-center">
			<p>&copy; <?php echo date( 'Y' ); ?> <?php echo $copyright ?: get_bloginfo(); ?> | Digital Marketing By <a href="https://www.incrediblemarketing.com/" target="_blank"><?php get_template_part( 'components/svg/incredible-marketing' ); ?>Incredible Marketing</a></p>
		</div>
	</footer>

</div><!-- end of .site-wrap -->

		<?php wp_footer(); ?>
	</body>
</html>
