<?php
    $content = get_sub_field('content');
?>

<div class="row section__padding justify-content-center">
  <div class="col-xl-8 col-lg-10 col-12">
      <div class="image__holder alignright">
        <?php echo get_the_post_thumbnail($post->ID, 'featured_thumb'); ?>
      </div>
      <?php echo $content; ?>
  </div>
</div>
