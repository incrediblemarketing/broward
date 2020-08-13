<?php
/**
 * Shortcode to display testimonials
 *
 * @category   Components
 * @package    WordPress
 * @subpackage Incredible Theme
 * @author     Nick Gonzales
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://www.incrediblemarketing.com/
 * @since      1.0.0
 */

/**
 * Testimonial shortcode [testimonials]
 */
function shortcode_testimonials() {
	global $post;

	$args = array(
		'post_type'      => 'testimonial',
		'posts_per_page' => -1,
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	$testimonials = new WP_Query( $args );
	$content      = '';
	if ( $testimonials->have_posts() ) :
		while ( $testimonials->have_posts() ) :
			$testimonials->the_post();
			$content             .= '<div class="testimonial--block">';
				$content .= get_the_content();
				$content .= '<h4>'.get_the_title().'</h4>';
			$content         .= '</div>';
			endwhile;
		wp_reset_postdata();
		endif;

	return $content;
}
add_shortcode( 'all_testimonials', 'shortcode_testimonials' );
