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

get_header(); ?>

<footer id="footer" class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-lg-4 col-md-6">
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
			<div class="col-lg-8 col-lg-8 col-md-6">
				<div class="contact__holder contact__holder--padding">
					<?php echo do_shortcode( '[gravityforms id="1" title="false" description="false" ajax="true"]' ); ?>
				</div>
			</div>
			<div class="col-12">
				<div class="iframe--holder">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.790315057792!2d-80.12090358497062!3d26.170957583452587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d901f519aeeae9%3A0xa6ddc7d498c64cdc!2sBroward%20ENT%20Services!5e0!3m2!1sen!2sus!4v1597220465603!5m2!1sen!2sus" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
			<div class="col-12 copyright text-center">
				<p>&copy; <?php echo date( 'Y' ); ?> <?php echo $copyright ?: get_bloginfo(); ?> | Digital Marketing By <a href="https://www.incrediblemarketing.com/" target="_blank"><?php get_template_part( 'components/svg/incredible-marketing' ); ?>Incredible Marketing</a></p>
			</div>
		</footer>
	</div>
</div><!-- end of .site-wrap -->

		<?php wp_footer(); ?>
	</body>
</html>
