<?php
/**
 * Display Recent Blogs
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

?>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h2>Recent Posts</h2>
			<?php
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 4,
				);

				$query = new WP_Query( $args );
				if ( $query->have_posts() ) :
					echo '<div class="grid--articles">';
					while ( $query->have_posts() ) :
						$query->the_post();
						echo '<div class="quick--article">';
							get_template_part( 'components/post-recent' );
						echo '</div>';
				endwhile;
				endif;
				wp_reset_postdata();
				?>
		</div>
	</div>
</div>
