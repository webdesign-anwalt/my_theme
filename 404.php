<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Error 404 Template
 *
 *
 * @file           404.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/404.php
 * @link           http://codex.wordpress.org/Creating_an_Error_404_Page
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

        <div id="content-full" class="grid col-940">
        
			<?php responsive_entry_before(); ?>
			<div id="post-0" class="error404">       
				<?php responsive_entry_top(); ?>

                <div class="post-entry">


<img src="http://ent-schuldigung.de/wp-content/uploads/Unterhaltsschulden-150x150.jpg"  class="foto alignleft" /><h1>Leider finden wir die von Ihnen gesuchte Seite nicht (mehr)!</h1>

<p>Beim letzten Aufräumen haben wir einige Artikel nicht mehr wieder ins Netz gestellt. Nachfolgend finden Sie aber Links zu unseren neuesten Beiträgen :</p>


<p>John Miehler<br />
Rechtsanwalt</p>

Bildquelle :© olly - Fotolia.com

<div class="clear" style="margin-top:25px"></div>
               
                    <div class="grid col-300">
                        <div class="widget-title"><?php _e('Categories', 'responsive'); ?></div>
                            <ul><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&title_li='); ?></ul>
                    </div><!-- end of .col-300 -->
                    
                    <div class="grid col-300">
                        <div class="widget-title"><?php _e('Latest Posts', 'responsive'); ?></div>
                            <ul><?php $archive_query = new WP_Query('posts_per_page=-1');
                                    while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
                                        <li>
                                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'responsive'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a>
                                        </li>
                                    <?php endwhile; ?>
                            </ul>  
                    </div><!-- end of .col-300 -->
                     
                    <div class="grid col-300 fit">
                          <div class="widget-title"><?php _e('Pages', 'responsive'); ?></div>
                            <ul><?php wp_list_pages("title_li=" ); ?></ul>               
                    </div><!-- end of .col-300 fit -->
                
                </div><!-- end of #widgets --> 

              
          
                    
                </div><!-- end of .post-entry -->
				               
				<?php responsive_entry_bottom(); ?>      
			</div><!-- end of #post-0 -->       
			<?php responsive_entry_after(); ?>

        </div><!-- end of #content-full -->

<?php get_footer(); ?>
