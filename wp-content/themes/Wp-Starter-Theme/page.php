<?php get_header(); ?>
<div class="block-style" id="cart-page">
    <h1 style="text-align: center; margin-bottom: 24px;">Ваше замовлення</h1>
    <?php while (have_posts()) : the_post(); ?>

        <div  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?> </a> <br/>


            <div class="description"><?php the_content(); ?></div><br/>

        </div>

    <?php endwhile; ?>
</div>
<?php get_footer(); ?>