<?php get_header(); ?>
 
    <?php while (have_posts()) : the_post(); ?>

            <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?> </a> <br/>


                <div class="description"><?php the_content(); ?></div><br/>

                <?php the_time('F j, Y g:i a') ?><br/>

                <?php the_author(); ?><br/>

                <?php the_category(); ?><br/>

                <?php the_tags(); ?><br/>

                <a href="<?php comments_link(); ?>">Comments</a><br/>

                <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>

            </div>

        <?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>