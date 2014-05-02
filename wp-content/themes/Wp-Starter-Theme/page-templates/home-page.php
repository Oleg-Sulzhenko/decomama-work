<?php
/**
 * Template Name: Home Page Template
 */
get_header();
?>
<?php
$loop = new WP_Query(array(
    'page_id' => 2,
        ));
?>
<?php while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="page-header-image">
        <?php the_post_thumbnail(array(960, 318)); ?>
    </div>
    <div  id="post-<?php the_ID(); ?>" class="cf block-style avtor-blok">
        <div class="autor-image">
            <img src="<?php the_field('autor-foto-home') ?>"/>
        </div>
        <div class="description"><?php the_content(); ?></div><br/>
    </div>
<?php endwhile; ?>
<div class="icons-my-works block-style">
    <h2>Decomama пропонує</h2>
    <div class="icons-box cf">
        <div class="icon-item">
            <a href="/?page_id=5">
                <div class="vysa_icon"></div><br/>
                <span>Оформлення свят<br/> та фотозйомок</span>
            </a>
        </div>
        <div class="icon-item">
            <a href="/?page_id=7">
                <div class="weddind_icon"></div><br/>
                <span>Весільний декор,<br/> поліграфія, аксесуари</span>
            </a>
        </div>
        <div class="icon-item">
            <a href="/?post_type=product">
                <div class="podarynok_icon"></div><br/>
                <span>Подарунки<br/>ручної роботи</span>
            </a>
        </div>
        <div class="icon-item">
            <a href="/?p=166">
                <div class="orenda_icon"></div><br/>
                <span>Оренда<br/>предметів декору</span>
            </a>
        </div>
        <div class="icon-item">
            <a href="/?page_id=5">
                <div class="vinok_icon"></div><br/>
                <span>Ексклюзивний<br/> декор для дому</span>
            </a>
        </div>
    </div>
</div>
<div class="images-my-works block-style cf">

    <h2>Мої роботи</h2>
    <?php
    $orenda_loop1 = new WP_Query(array(
        'post_type' => array('orenda', 'decor', 'wedding'),
        'posts_per_page' => -1,
        'orderby' => 'rand',
        'meta_key' => 'show_on_home',
        'meta_value' => true
    ));
    ?>
    <div id="mansory-container">
        <?php while ($orenda_loop1->have_posts()) : $orenda_loop1->the_post(); ?>
            <div class="front-page-myworks-item">
                <a href="<?php the_permalink(); ?>" rel="" >
                    <?php the_post_thumbnail('wedding-img'); ?> 
                    <div class="overlay">
                        <span><p><?php the_title(); ?></p></span>
                    </div>
                </a>
            </div>
        <?php endwhile; ?>
    </div>

</div>

<?php get_footer(); ?>