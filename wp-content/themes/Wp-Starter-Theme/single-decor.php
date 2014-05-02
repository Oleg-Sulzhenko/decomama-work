<?php get_header(); ?>
<div class="cf block-style single-entry-page">
    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="nazad-btn"></a>
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h2><?php the_title(); ?> <span><?php the_time('F j, Y') ?></span></h2>
                <br/>
                <div class="description">
                    <?php the_content(); ?>
                    <div id="mansory-container">
                        <?php
                        if (function_exists('easy_image_gallery')) {
                            echo easy_image_gallery();
                        }
                        ?>
                    </div>
                </div>

            </div>

        <?php endwhile; ?>

    <?php endif; ?>
    

</div>
<?php get_footer(); ?>
