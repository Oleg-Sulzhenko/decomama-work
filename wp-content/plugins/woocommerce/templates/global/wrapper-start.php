<?php
$loop = new WP_Query(array(
    'page_id' => 161,
        ));
?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>

    <div class="page-header-image shop-slider">
            <?php the_post_thumbnail(); ?>
    </div> 
<div class="white-gap"></div>

<?php endwhile; ?>

<?php
/**
 * Content wrappers
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
if (!defined('ABSPATH'))
    exit; // Exit if accessed directly

$template = get_option('template');

switch ($template) {
    case 'twentyeleven' :
        echo '<div id="primary"><div id="content" role="main">';
        break;
    case 'twentytwelve' :
        echo '<div id="primary" class="site-content"><div id="content" role="main">';
        break;
    case 'twentythirteen' :
        echo '<div id="primary" class="site-content"><div id="content" role="main" class="entry-content twentythirteen">';
        break;
    case 'twentyfourteen' :
        echo '<div id="primary" class="content-area"><div id="content" role="main" class="site-content twentyfourteen"><div class="tfwc">';
        break;
    default :
        echo '<div id="container"><div id="content" class="cf block-style" role="main"><div class="inside-shop-wrapper">';
        break;
}
?>