<?php
/**
 * The sidebar containing the intro widget area.
 *
 * @package Create
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<div id="intro-widget-area" class="widget-area widget-area-intro" role="complementary">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #supplementary -->
