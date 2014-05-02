<?php
/**
 * Template Name: Blog Page Template
 */
?>
<?php get_header(); ?>
<div class="cf block-style main-entry-block">

    <div class="categories-filter">
        <?php
        $args = array(
            'title_li' => __(''),
        );
        ?>
        <ul>
            <?php wp_list_categories($args); ?> 
        </ul>
    </div>

    <?php
    $loop = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
    ));
    ?>
    <span class="last-news-txt">Остання новина:</span>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

        <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="main-entry-img-box"><?php the_post_thumbnail(); ?></div>
            <div class="main-entry-text-box">
                <span class="main-entry-cat">
                    <?php
                    $category = get_the_category();
                    echo $category[0]->cat_name;
                    ?>
                </span>

                <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?> </a></h2>

                <div class="description"><?php the_content(); ?></div>
            </div>

        </div>

    <?php endwhile; ?>

</div>

<div class="cf block-style all-entrys-block">
    <?php
    $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $wpquery = new WP_Query(array(
        'order' => 'DESC',
        'cat' => $cat_id,
        'posts_per_page' => 4,
        'paged' => $page
    ));
    ?>
    <div>
        <?php while ($wpquery->have_posts()) : $wpquery->the_post(); ?>
            <div  id="post-<?php the_ID(); ?>" class="eyntry-body">

                <div class="all-entry-img-box">
                    <?php // the_post_thumbnail(); ?>

                    <a href="<?php the_permalink(); ?>" class="title"><img src="http://placehold.it/213x250"/></a>
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
                        <?php echo substr(strip_tags(get_the_content()), 0, 300); ?> 
                        <a href="<?php echo get_permalink(); ?>"> Більше ...</a>
                    </div>
                </div>

            </div>

        <?php endwhile; ?>
    </div>
    <div class="pagination-box">
        <div class="boxik">
            <!-- Pagination -->
            <?php
            global $wpquery;
            $big = 999999999; // need an unlikely integer

            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wpquery->max_num_pages
            ));
            ?>
        </div>
    </div>

</div>



<?php get_footer(); ?>