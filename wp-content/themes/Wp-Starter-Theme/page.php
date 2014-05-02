<?php get_header(); ?>

<!-- Wp Query Ref - https://gist.github.com/luetkemj/2023628 -->

//<?php
//    $loop = new WP_Query(array(
//    'post_type' => 'post',
//    'posts_per_page' => 3,
//    'paged' => $paged
//    ));
?>

<?php // while ($loop->have_posts()) : $loop->the_post();  ?>

<!--------------------------------------------------------------------------------->

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?> </a> <br/>

        <?php the_post_thumbnail(); ?><br/>

            <div class="description"><?php the_content(); ?></div><br/>

            <?php the_time('F j, Y g:i a') ?><br/>

            <?php the_author(); ?><br/>

            <?php the_author_link(); ?><br/>

            <?php the_category(); ?><br/>

        <?php the_tags(); ?><br/>

            <a href="<?php comments_link(); ?>">Comments</a><br/>

            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>

        </div>

        <div class="pagination-container">
            <!-- Pagination -->
            <?php
            $big = 999999999; // need an unlikely integer

            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'prev_text' => __('« Previous'),
                'next_text' => __('Next »'),
                'total' => $loop->max_num_pages
            ));
            ?>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_sidebar(); ?> 
<?php get_footer(); ?>