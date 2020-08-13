<?php get_header(); ?>

<section class="blog--page">
	<div class="container">
		<div class="row">
  		<div class="col-12">
				<?php if (have_posts()) : ?>
					<h2>Recent Posts</h2>
					<?php while (have_posts()) : the_post(); ?>

						<?php get_template_part('components/post-preview'); ?>

					<?php endwhile; ?> 

					<?php get_template_part('components/navigation-loop'); ?>

				<?php else : ?>

					<?php get_template_part('components/post-not-found'); ?>

				<?php endif; ?>
			</div>
		</div>
		<?php get_sidebar('blog'); ?>
	</div>
</section>

<?php get_footer(); ?>
