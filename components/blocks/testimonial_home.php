<?php
  $top_content = get_sub_field('content');

  $args = array(
    'post_type'   => 'testimonial',
    'posts_per_page'  => -1,
    'post__not_in'     => array(171,170,167,166,160,161,159,158)
  );
  $testimonials = new WP_Query($args);
    ?>

<div class="row testimonial--top ">
  <div class="col-xxl-3 col-xl-5 offset-xl-1 col-md-6">
      <div class="fade-in-left">
        <?php echo $top_content; ?>
      </div>
  </div>
</div>
<div class="row testimonial--title justify-content-center">
  <div class="col-xl-10 col-12">
    <h2 class="line"><span>Testimonials</span></h2>
  </div>
</div>

<div class="row block__testimonial--slider">
  <div class="col-12">
    <div class="swiper-container swiper--testimonials">
      <div class="swiper-wrapper">
        <?php if($testimonials->have_posts()) : 
            while($testimonials->have_posts()) : $testimonials->the_post();
                ?>
            <div class="swiper-slide testimonial--area">
              <div class="testimonial--body">
                <?php the_content(); ?>
                <h4 class="line"><?php echo get_the_title(); ?></h4>
              </div>
            </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</div>
