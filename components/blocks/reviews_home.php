<div class="row reviews--area justify-content-center">
  <div class="col-md-4 col-6">
      <div class="fade-in-left">
        <a href="<?php echo get_field('facebook_review', 'options'); ?>" target="_blank">
          <h3>Facebook</h3>
          <?php get_template_part('components/svg/stars'); ?>
          <p>50+ reviews</p>
        </a>
      </div>
  </div>
  <div class="col-md-4 col-6">
      <div class="fade-in-right">
        <a href="<?php echo get_field('google_review', 'options'); ?>" target="_blank">
          <h3>Google</h3>
          <?php get_template_part('components/svg/stars'); ?>
          <p>75+ reviews</p>
        </a>
      </div>
  </div>
</div>
