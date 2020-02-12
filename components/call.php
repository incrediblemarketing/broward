<?php

    $business_phone_display = get_field('business_phone_display', 'options');
    $business_phone_url = get_field('business_phone_url', 'options');

?>

<?php if ($business_phone_display && $business_phone_url) : ?>
    <a class="btn btn-primary" href="tel:<?php echo $business_phone_url; ?>">
        <i class="fa fa-phone"></i> <span><?php echo $business_phone_display; ?></span>
    </a>
<?php endif; ?>
