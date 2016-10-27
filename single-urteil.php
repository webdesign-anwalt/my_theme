<?php
/* Template Name: Urteil */
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
        
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
        <?php get_template_part( 'loop-header' ); ?>
        
			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>       
				<?php responsive_entry_top(); ?>

                <?php get_template_part( 'post-meta-page' ); ?>
                
                <div class="post-entry">
		<div class="urteil-kopfbereich">Im  Namen<br /> des Volkes!
				
					<div class="urteilheader">
						<p class="urteil">Entscheidung des <br /><b><?php the_field('gericht'); ?></b><br /> vom <b><?php the_field('datum_urteil'); ?></b><br /> Aktenzeichen: <?php the_field('aktenzeichen_'); ?></p>
						<p>Quelle: <?php the_field('quelle_urteil'); ?><p>
					</div> <!-- Ende urteilheader-->
					</div> <!-- Ende Urteil-Kopfbereich -->

						<div class="hinweis_vor_dem_urteil">
						<?php the_field('hinweis_vor_dem_urteil'); ?>
						</div> <!-- Ende Hinweis -->
						<div class="leitsatz">
						<?php the_field('leitsatz'); ?>
						</div> <!-- Ende Leitsatz -->
						<div class="entscheidungstext">
						 <?php the_content(__('Read more &#8250;', 'responsive')); ?>
						</div> <!-- Ende Entscheidungstext-->
						<div class="info">
						<?php the_field('tipp_nach_dem_urteil'); ?>
						</div> <!-- Ende Tipp -->
					
                   
                    <?php wp_link_pages(array('before' => '<div class="pagination">' . __('Pages:', 'responsive'), 'after' => '</div>')); ?>
                </div><!-- end of .post-entry -->
            
				<?php get_template_part( 'post-data' ); ?>
				               
				<?php responsive_entry_bottom(); ?>      
			</div><!-- end of #post-<?php the_ID(); ?> -->       
			<?php responsive_entry_after(); ?>
           

			            
        <?php 
		endwhile; 

		get_template_part( 'loop-nav' ); 

	else : 

		get_template_part( 'loop-no-posts' ); 

	endif; 
	?>  
      
</div><!-- end of #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
