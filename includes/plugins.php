<?php

require_once get_template_directory() . '/includes/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php';

function incredible__register_required_plugins()
{

    $plugins = array(

    array(
    'name'               => 'Advanced Custom Fields Pro',
    'slug'               => 'advanced-custom-fields-pro',
    'source'             => get_template_directory() . '/includes/plugins/advanced-custom-fields-pro.zip',
    'external_url'       => 'https://www.advancedcustomfields.com/pro/',
    'required'           => true,
    ),

    array(
    'name'               => 'Gravity Forms',
    'slug'               => 'gravityforms',
    'source'             => get_template_directory() . '/includes/plugins/gravityforms.zip',
    'external_url'       => 'https://www.gravityforms.com/',
    'required'           => true,
    ),

    array(
    'name'      => 'All in One SEO Pack',
    'slug'      => 'all-in-one-seo-pack',
    'required'  => true,
    ),

    array(
    'name'      => 'Custom Post Type UI',
    'slug'      => 'custom-post-type-ui',
    'required'  => false,
    ),

    array(
    'name'      => 'GatherContent Plugin',
    'slug'      => 'gathercontent-import',
    'required'  => false,
    ),

    );

    $config = array(
    'id'           => 'incredibletheme',       // Unique ID for hashing notices for multiple instances of TGMPA.
    'default_path' => '',                      // Default absolute path to bundled plugins.
    'menu'         => 'tgmpa-install-plugins', // Menu slug.
    'parent_slug'  => 'themes.php',            // Parent menu slug.
    'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
    'has_notices'  => true,                    // Show admin notices or not.
    'dismissable'  => true,                   // If false, a user cannot dismiss the nag message.
    'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
    'is_automatic' => true,                    // Automatically activate plugins after installation or not.
    'message'      => '',                      // Message to output right before the plugins table.
    );

    tgmpa($plugins, $config);
}

add_action('tgmpa_register', 'incredible__register_required_plugins');
