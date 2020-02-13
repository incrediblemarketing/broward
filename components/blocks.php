<?php

if (have_rows('blocks')) :
    while (have_rows('blocks')) : the_row();
        $layout = get_row_layout();
        $wrap_as_block = get_sub_field('wrap_as_block');
        $defaults = get_sub_field('defaults');
        $block = get_sub_field('block');
        $block_id = get_sub_field('block_id');
        $block_content = get_sub_field('block_content');
        $logo = get_sub_field('logo_select');

        if ($wrap_as_block) {

            $block_class = get_block_class($block, $defaults);
            $block_content_class = get_block_content_class($block_content, $defaults);
            $block_bg_color = get_block_bg_color($block, $defaults);
            $block_content_bg_color = get_block_content_bg_color($block_content, $defaults);
            $block_bg_image = get_block_bg_image($block, $defaults)['url'];
            $block_content_bg_image = get_block_content_bg_image($block_content, $defaults)['sizes']['hero_thumb'];

            echo '<section id="block-' . $block_id . '" class="block block-' . $layout . ' ' . $block_class . '"';
            echo $block_bg_color ? ' data-bg-color="' . $block_bg_color . '"' : '';
            echo $block_bg_image ? ' data-bg-image="' . $block_bg_image . '"' : '';
            echo '>';
            if ($logo === 'small-circle') {
                echo '<div class="logo__holder"><img src="/wp-content/uploads/2020/02/Broward_Logo_GLD.png" class="logo__small-circle" /></div>';
            }
            echo '<div class="block-content ' . $block_content_class . '"';
            echo $block_content_bg_color ? ' data-bg-color="' . $block_content_bg_color . '"' : '';
            echo $block_content_bg_image ? ' data-bg-image="' . $block_content_bg_image . '"' : '';
            echo '>';
        }

        echo get_template_part('components/blocks/' . $layout);

        if ($wrap_as_block) {
            echo get_block_content_video($block_content, $defaults);
            echo '</div>';
            echo get_block_video($block, $defaults);
            echo '</section>';
        }
    endwhile;
endif;
