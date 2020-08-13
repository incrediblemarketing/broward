<?php
	get_header();
?>

<section class="blog--page">
	<div class="container">
		<div class="row">
		  <div class="col-12">
		<?php if ( have_posts() ) : ?>
						<?php
						while ( have_posts() ) :
							the_post();
							?>
						<article>
				<div class="image__holder alignright">
							<?php echo get_the_post_thumbnail( $post->ID, 'featured_thumb' ); ?>
								</div>
								<?php the_content(); ?>
							</article>
			<?php endwhile; ?>
		<?php endif; ?>
			</div>
		</div>
		<?php get_sidebar( 'blog' ); ?>
	</div>
</section>
<section class="block block--recent_blogs">
	<?php get_template_part( 'components/blocks/recent_blogs' ); ?>
</section>
<?php get_footer(); ?>
