<?php /*Template Name: Urteilsübersicht */ ?>
<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
get_header(); ?>

<div id="content-archive" class="<?php echo implode( ' ', responsive_get_content_classes() ); ?>">

<?php
$category_description = category_description();
if ( ! empty( $category_description ) )
echo '<div class="archive-meta">' . $category_description . '</div>';?>




	<?php query_posts('post_type=urteil&post_status=publish');
	if (have_posts()) : ?>
        
        <?php get_template_part( 'loop-header' ); ?>
                    
        <?php while (have_posts()) : the_post(); ?>
        
			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>       
				<?php responsive_entry_top(); ?>

                 <?php get_template_part( 'post-meta' ); ?> 
                <p><i class="fa fa-gavel"></i> <?php the_field('gericht'); ?> | <?php the_field('datum_urteil'); ?> | Az: <?php the_field('aktenzeichen_'); ?><br /> <a href="#" class="leitsatz-slide"> <i class="fa fa-arrow-circle-down"></i> Leitsatz anzeigen</a> <a href="<?php the_permalink() ?>"<i class="fa fa-arrow-circle-right"></i> Urteil anzeigen</a></p>
		<div class="leitsatz">
			<?php the_field('leitsatz'); ?>
		</div> <!-- Ende Leitsatz -->
                <div class="post-entry">
                    <?php if ( has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php the_post_thumbnail('thumbnail', array('class' => 'alignleft')); ?>
                        </a>
                    <?php endif; ?>
                    
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
      
</div><!-- end of #content-archive -->
        
<script type="text/javascript">
<!--
updatepage();
//-->
jQuery(document).ready(function){
		jQuery(".leitsatz").hide();
	 	jQuery(".leitsatz-slide").click(function() {
		    jQuery(".leitsatz").show();
		    jQuery(".leitsatz").slideToggle("normal");
	 });
});
</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>