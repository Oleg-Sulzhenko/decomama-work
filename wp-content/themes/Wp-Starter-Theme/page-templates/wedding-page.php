<?php
/**
 * Template Name: Wedding Page Template
 */
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('Decomama |', true, 'left'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); ?>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fonts/Corki_Tuscan_Rounded_400.font.js"></script>

    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="wrap">
                <div class="main-menu">
                    <?php wp_nav_menu(array('menu' => 'main-menu-left')); ?>
                    <a href="/" id="logo-placeholder"></a>
                    <?php wp_nav_menu(array('menu' => 'main-menu-right')); ?>
                </div>
            </div>
        </header>
        <div class="wrap cf">
            <?php
            $loop = new WP_Query(array(
                'page_id' => 7,
            ));
            ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="page-header-image">
                    <?php the_post_thumbnail(array(960, 318)); ?>
                </div> 

                <div class="cf block-style wedding-icon-box">
                    <div id="wedding-icon"></div>
                    <div class="description"><?php the_content(); ?></div><br/>
                </div>

                <div class="cf block-style pre-description">
                    <?php the_field('more_text'); ?>  
                </div>

            <?php endwhile; ?>


            <div class="cf block-style icons-links">
                <h2>Не бійтесь проявити свою індивідуальність з Decomama!</h2>
                <a href="/?mytaxonomywedding=zaproshennia">
                    <div class="zaproshennia_icon"></div><br/>
                    <span>Запрошення</span>
                </a>  
                <a href="/?mytaxonomywedding=oformzal">
                    <div class="oform-zal_icon"></div><br/>
                    <span>Оформлення залу</span>
                </a>  
                <a href="/?mytaxonomywedding=ceremonia">
                    <div class="ceremonia_icon"></div><br/>
                    <span>Виїздна церемонія</span>
                </a>  
                <a href="/?mytaxonomywedding=aksesuary">
                    <div class="aksesuary_icon"></div><br/>
                    <span>Весільні аксесуари</span>
                </a>  
            </div>


            <div class="cf block-style wedding-images">
                <div id="mansory-container"> 
                    <?php
                    if (function_exists('easy_image_gallery')) {
                        echo easy_image_gallery();
                    }
                    ?>  
                </div>
            </div>


            <?php get_footer(); ?>
     