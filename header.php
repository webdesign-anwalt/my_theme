<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        my_theme 
 * @author         John Miehler 
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<!--[if !IE]>      <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans|Lato|Montserrat|Open+Sans|Open+Sans+Condensed:300|Oswald|PT+Sans|Raleway|Roboto|Roboto+Condensed|Ubuntu" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<title>
<?php
if ( defined( 'WPSEO_VERSION' ) ) {
    // WordPress SEO is activated
        wp_title();

} else {
	
    // WordPress SEO is not activated
	wp_title( '&#124;', true, 'right' );
}
?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<?php wp_enqueue_style('john-style', get_stylesheet_uri(), false, '0.1');?>
<?php wp_enqueue_script('jquery'); // muss VOR wp_head eingebunden werden! ?>
<?php wp_head(); ?>
<meta name="google-site-verification" content="eYwUSVMi3-Qh-PpkNMVOFpyE134F0mRrwOsNMxhhgkE" />
</head>

<body <?php body_class(); ?>>
                
<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">
         
    <?php responsive_header(); // before header hook ?>
    <div id="header">

<section id="mm-header" class="dunkel-text">
<div><h2>Miehler & Müller GbR</h2>
<h3 class="dunkel-text">anwaltliche Schuldnerberatung</h3></div>
</section>
   
    <?php get_sidebar('top'); ?>
				<?php wp_nav_menu(array(
				    'container'       => 'div',
						'container_class'	=> 'main-nav dunkel-verlauf',
						'fallback_cb'	  =>  'responsive_fallback_menu',
						'theme_location'  => 'header-menu')
					); 
				?>
                
 

			<?php responsive_header_bottom(); // after header content hook ?>
 
    </div><!-- end of #header -->
    <?php responsive_header_end(); // after header container hook ?>
    
	<?php responsive_wrapper(); // before wrapper container hook ?>
    <div id="wrapper" class="clearfix">
		<?php responsive_wrapper_top(); // before wrapper content hook ?>
		<?php responsive_in_wrapper(); // wrapper hook ?>

<?php
if (is_single()) {
$post = get_post(get_the_ID());
if ($post != null) {
$author_url = get_the_author_meta( 'user_url', $post->post_author );
if ($author_url != '') {
echo '<link rel="author" href="'.$al.'"/>';
}
}
}
?>