<?php
/**
 * Template Name: Decor Page Template
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

        <style>
<?php
$loop2 = new WP_Query(array(
    'page_id' => 5,
        ));
?>
<?php while ($loop2->have_posts()) : $loop2->the_post(); ?>
                body{
                    background: url( <?php the_field('background_photo') ?> ) repeat center top #EAF4F3;
                }
<?php endwhile; ?>          
        </style>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $("#accordion").accordion();
            });
        </script>

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
                'page_id' => 5,
            ));
            ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>

                <div  id="post-<?php the_ID(); ?>" class="cf block-style top-text">
                    <div class="description"><?php the_content(); ?></div><br/>
                </div>

                <!--CAROSELL BLOCKS --------------------------------->                    
                <div id="decor-categories-carousel"  class="cf block-style">
                    <div class="pre-description">
                        <?php the_field('pre_descroption') ?>  
                    </div>
                <?php endwhile; ?>

                <!--                <div class="carousels-blocks"> 
                                    <h4><span>Банкетні зали</span></h4>
                                    <div class="first-carousel carousel-block">
                                        <div class="prev prev1"></div>
                                        <div class="next next1"></div>
                                        <div class="bxslider-1">
                <?php
                $loop41 = new WP_Query(array(
                    'post_type' => 'decor',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'Skills',
                            'terms' => array(4), // Magick number
                        )
                    )
                ));
                ?>
                <?php while ($loop41->have_posts()) : $loop41->the_post(); ?>
                    
                                                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(array(300, 168)); ?> 
                                                        <span><p><?php the_title(); ?></p></span>
                                                    </a>
                <?php endwhile; ?>
                                        </div>
                                    </div>
                                </div>-->

                <div class="carousels-blocks"> 
                    <h4><span>Тематичні фотозйомки</span></h4>
                    <div class="second-carousel carousel-block">
                        <div class="prev prev2"></div>
                        <div class="next next2"></div>
                        <div class="bxslider-2">
                            <?php
                            $loop42 = new WP_Query(array(
                                'post_type' => 'decor',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'Skills',
                                        'terms' => array(5), // Magick number
                                    )
                                )
                            ));
                            ?>
                            <?php while ($loop42->have_posts()) : $loop42->the_post(); ?>

                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(array(300, 168)); ?> 
                                    <span><p><?php the_title(); ?></p></span>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>

                <div class="carousels-blocks"> 
                    <h4><span>Авторське рішення</span></h4>
                    <div class="second-carousel carousel-block">
                        <div class="prev prev3"></div>
                        <div class="next next3"></div>
                        <div class="bxslider-3">
                            <?php
                            $loop43 = new WP_Query(array(
                                'post_type' => 'decor',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'Skills',
                                        'terms' => array(6), // Magick number
                                    )
                                )
                            ));
                            ?>
                            <?php while ($loop43->have_posts()) : $loop43->the_post(); ?>

                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(array(300, 168)); ?> 
                                    <span><p><?php the_title(); ?></p></span>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>

                <div class="carousels-blocks"> 
                    <h4><span>Інше …</span></h4>
                    <div class="second-carousel carousel-block">
                        <div class="prev prev4"></div>
                        <div class="next next4"></div>
                        <div class="bxslider-4">
                            <?php
                            $loop44 = new WP_Query(array(
                                'post_type' => 'decor',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'Skills',
                                        'terms' => array(7), // Magick number
                                    )
                                )
                            ));
                            ?>
                            <?php while ($loop44->have_posts()) : $loop44->the_post(); ?>

                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(array(300, 168)); ?> 
                                    <span><p><?php the_title(); ?></p></span>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>

            </div>
            <!--end CAROSELL BLOCKS --------------------------------->    

            <!--ORENDA BLOCKS --------------------------------->
            <div class="cf block-style orenda-block">
                <?php
                $loop5 = new WP_Query(array(
                    'page_id' => 5,
                ));
                ?>
                <?php while ($loop5->have_posts()) : $loop5->the_post(); ?>
                    <div class="pre-description cf">
                        <div id="orenda-icon"></div>
                        <div id="orenda-maintext">
                            <h2 style="text-align: center; margin-top: 12px">Оренда</h2>
                            <?php the_field('orenda-block-text') ?>  
                        </div>
                        
                    </div>
                <?php endwhile; ?> 


                <div id="accordion">
                    <h3><span>Тематичний реквізит</span></h3>
                    <div class="thumnails-container">
                        <?php
                        $orenda_loop1 = new WP_Query(array(
                            'post_type' => array('orenda', 'decor'),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'mytaxonomyorenda',
                                    'terms' => array(8), // Magick number
                                )
                            )
                        ));
                        ?>
                        <?php while ($orenda_loop1->have_posts()) : $orenda_loop1->the_post(); ?>

                            <a href="<?php the_permalink(); ?>"  >
                                <?php the_post_thumbnail(array(300, 200)); ?> 
                                <span><p><?php the_title(); ?></p></span>
                            </a>

                        <?php endwhile; ?>
                    </div>
                    <h3><span>Сезонні набори</span></h3>
                    <div class="thumnails-container">
                        <?php
                        $orenda_loop2 = new WP_Query(array(
                            'post_type' => array('orenda', 'decor'),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'mytaxonomyorenda',
                                    'terms' => array(9), // Magick number
                                )
                            )
                        ));
                        ?>
                        <?php while ($orenda_loop2->have_posts()) : $orenda_loop2->the_post(); ?>

                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(array(300, 200)); ?> 
                                <span><p><?php the_title(); ?></p></span>
                            </a>

                        <?php endwhile; ?>
                    </div>
                    <h3><span>Весілля</span></h3>
                    <div class="thumnails-container">
                        <?php
                        $orenda_loop3 = new WP_Query(array(
                            'post_type' => array('orenda', 'decor'),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'mytaxonomyorenda',
                                    'terms' => array(10), // Magick number
                                )
                            )
                        ));
                        ?>
                        <?php while ($orenda_loop3->have_posts()) : $orenda_loop3->the_post(); ?>

                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(array(300, 200)); ?> 
                                <span><p><?php the_title(); ?></p></span>
                            </a>

                        <?php endwhile; ?>
                    </div>
                    <h3><span>Меблі</span></h3>
                    <div class="thumnails-container">
                        <?php
                        $orenda_loop4 = new WP_Query(array(
                            'post_type' => array('orenda', 'decor'),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'mytaxonomyorenda',
                                    'terms' => array(11), // Magick number
                                )
                            )
                        ));
                        ?>
                        <?php while ($orenda_loop4->have_posts()) : $orenda_loop4->the_post(); ?>

                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(array(300, 200)); ?> 
                                <span><p><?php the_title(); ?></p></span>
                            </a>

                        <?php endwhile; ?>
                    </div>
                    <h3><span>Інше ...</span></h3>
                    <div class="thumnails-container">
                        <?php
                        $orenda_loop5 = new WP_Query(array(
                            'post_type' => array('orenda', 'decor'),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'mytaxonomyorenda',
                                    'terms' => array(12), // Magick number
                                )
                            )
                        ));
                        ?>
                        <?php while ($orenda_loop5->have_posts()) : $orenda_loop5->the_post(); ?>

                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(array(300, 168)); ?> 
                                <span><p><?php the_title(); ?></p></span>
                            </a>

                        <?php endwhile; ?>
                    </div>

                </div>
            </div>

            <?php get_footer(); ?>
     