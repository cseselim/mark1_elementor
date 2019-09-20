<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-4 widget-areadd" id="right-sidebar" role="complementary">
	<ul>
		<li>
	<?php else : ?>
<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
	<?php endif; ?>
	<?php dynamic_sidebar( 'right-sidebar' ); ?>
</li>
</ul>
</div><!-- #right-sidebar -->
