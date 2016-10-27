<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Main Widget Template
  */
?>
		<?php responsive_widgets_before(); // above widgets container hook ?>
        <label class="toggle" for="sidebar-toggle">mehr</label>
<input type="checkbox" id="sidebar-toggle">
        <div id="widgets" class="">
        <?php responsive_widgets(); // above widgets hook ?>
            
            <?php if (!dynamic_sidebar('right-sidebar')) : ?>
            <div class="widget-wrapper">
            
                <div class="widget-title"><?php _e('In Archive', 'responsive'); ?></div>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>

            </div><!-- end of .widget-wrapper -->
			<?php endif; //end of right-sidebar ?>

        <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of #widgets -->
		<?php responsive_widgets_after(); // after widgets container hook ?>