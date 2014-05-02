<?php get_header(); ?>

<div class="cf block-style main-entry-block">
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <div  id="post-<?php the_ID(); ?>" class="eyntry-body">

                <div class="all-entry-img-box">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="main-entry-text-box">
                    <span class="main-entry-cat">
                        <?php
                        $category = get_the_category();
                        echo $category[0]->cat_name;
                        ?>
                    </span>

                    <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?> </a></h2>

                    <div class="description">
                        <?php the_content(); ?>
                    </div>
                </div>

            </div>
            <div class="netx-prev-links">
                <div class="prev-posts">
                    <?php previous_post_link('%link', '&laquo; Попередній запис', FALSE); ?>     
                </div>
                <div class="next-posts">
                    <?php next_post_link('%link', 'Наступний запис &raquo;', FALSE); ?> 
                </div>
            </div>


        <?php endwhile; ?>

    <?php endif; ?>
</div>

<?php get_footer(); ?>