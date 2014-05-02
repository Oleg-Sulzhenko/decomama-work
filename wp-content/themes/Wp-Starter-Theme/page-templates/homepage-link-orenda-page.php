<?php
/**
 * Template Name: Home-link Orenda Page
 */
?>
<?php get_header(); ?>

<div class="cf block-style all-orendas-page">
    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="nazad-btn"></a>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h2><?php the_title(); ?></h2>
                <br/>
                <br/>
                <div class="description">
                    <?php the_content(); ?>
                </div>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>
    <br/>
    <br/>
    <div id="mansory-container">
        <?php
        $orenda_loop1 = new WP_Query(array(
            'post_type' => array('orenda', 'decor'),
            'tax_query' => array(
                array(
                    'taxonomy' => 'mytaxonomyorenda',
                    'terms' => array(8, 9, 10, 11, 12), // Magick number
                )
            )
        ));
        ?>
        <?php while ($orenda_loop1->have_posts()) : $orenda_loop1->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="mansory-item">
                <?php the_post_thumbnail('wedding-img'); ?> 
                <span><p><?php the_title(); ?></p></span>
            </a>

        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>


