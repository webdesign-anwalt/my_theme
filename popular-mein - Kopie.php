<?php
/*
Template Name: Popular Posts
*/
?>

<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Pages Template
 *
 *
 * @file           page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="<?php echo implode( ' ', responsive_get_content_classes() ); ?>">
<h2 >Vielen Dank für Ihre Anfrage. Wir werden baldm&ouml;glichst antworten. </h2>
<div class="info"><h2 class="lobster">Das könnte Sie auch interessieren:</h2></div>

                   
                    <div class="">
                        <div class="widget-title"><?php _e('Latest Posts', 'responsive'); ?></div>
                            <ul><?php $archive_query = new WP_Query('posts_per_page=-1');
                                    while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                            </ul>  
                    </div>

              
          
                    
                </div><!-- end of .post-entry -->
				               
				<?php responsive_entry_bottom(); ?>      
		      
			<?php responsive_entry_after(); ?>

 

<?php get_sidebar(); ?>
<?php get_footer(); ?>
