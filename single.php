<?php
    get_header();
?>

<div class="row blog__article section__padding justify-content-center">
  <div class="col-xl-8 col-lg-10 col-12">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="image__holder aligncenter">
                <?php echo get_the_post_thumbnail($post->ID, 'post_large'); ?>
                </div>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>
