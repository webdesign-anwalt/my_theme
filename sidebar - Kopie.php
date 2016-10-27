<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
Sidebar
 */

/*
 * If this is a full-width page, exit
 */
if ( 'full-width-page' == responsive_get_layout() ) {
	return;
}
?>

<?php responsive_widgets_before(); // above widgets container hook ?>


<input type="checkbox" id="sidebar-toggle">
<label class="toggle" for="sidebar-toggle"><span>mehr Infos</span></label>
<div id="widgets" class="<?php echo implode( ' ', responsive_get_sidebar_classes() ); ?>">
	<?php responsive_widgets(); // above widgets hook ?>
		
		<?php if (!dynamic_sidebar('main-sidebar')) : ?>
		<div class="widget-wrapper">
		
			<div class="widget-title"><?php _e('In Archive', 'responsive'); ?></div>
				<ul>
					<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
				</ul>

		</div><!-- end of .widget-wrapper -->
		<?php endif; //end of main-sidebar ?>

	<?php responsive_widgets_end(); // after widgets hook ?>
</div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>