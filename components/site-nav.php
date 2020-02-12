<nav class="site-nav">
    <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
        <?php get_template_part('components/svg/logo'); ?>
    </a>

    <?php $args = array(
    'theme_location'  => 'header-menu',
    'container'       => false,
    'menu_class'      => 'menu'
    );
    wp_nav_menu($args); ?>

    <?php get_template_part('components/social-icons'); ?>
    <?php get_template_part('components/call'); ?>
    <button data-toggle="menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>
