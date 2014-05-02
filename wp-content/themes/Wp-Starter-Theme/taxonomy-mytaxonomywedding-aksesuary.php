<?php get_header(); ?>
<div class="cf block-style single-entry-page  wedding-item-to-style">
    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" id="nazad-btn"></a>
    <h1>Весільні аксесуари</h1>
    <br/>
    <div id="mansory-container">
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <div  id="post-<?php the_ID(); ?>" <?php post_class('front-page-myworks-item'); ?>>
                    <a href="<?php the_permalink(); ?>" rel="" >
                        <?php the_post_thumbnail('wedding-img'); ?> 
                        <div class="overlay">
                            <span><p><?php the_title(); ?></p></span>
                        </div>
                    </a>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>

</div>
<?php get_footer(); ?>