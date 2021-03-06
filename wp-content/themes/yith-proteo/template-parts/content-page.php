<?php
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/template-parts/template-parts.php' ) ) {
	include_once( get_template_directory() . '/template-parts/template-parts.php' );
}
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yith-proteo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header">
			<?php
			if ( function_exists( 'woocommerce_breadcrumb' ) && ! ( is_order_received_page() ) ) {
				woocommerce_breadcrumb();
			}
			?>
			<?php
			yith_proteo_print_page_titles();
			?>
		</header><!-- .entry-header -->
	<?php endif; ?>
	<?php yith_proteo_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yith-proteo' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'yith-proteo' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
