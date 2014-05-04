</div> <!-- wrap end-->

</div>
<footer>
    <div class="wrap">

        <div class="footer-box">    
            <h3>Відгуки клієнтів</h3>

            <div  id="testimonials" class="cf">
                <?php
                $loop = new WP_Query(array(
                    'post_type' => 'testimonial',
                ));
                ?>
                <ul class="bxslider-testimonials">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        <li>
                            <div class="avatar-name">    
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail(array(150, 150));
                                } else {
                                    echo '<img src="' . get_template_directory_uri() . '/img/default-user.png"/>';
                                }
                                ?> 
                                <span><?php the_title(); ?></span>
                            </div>
                            <div class="text">
                                <?php the_content(); ?>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <div class="next-t"></div>
                <div class="prev-t"></div>
            </div>
        </div>


        <div class="footer-box" id="contac-us">
            <h3>Напишіть нам</h3>
            <a id="contact-popap" class="inline cboxElement" href="#form-colorbox-container"></a>
            <dic class="contact-us-form" id="form-colorbox-container">
                <?php echo do_shortcode('[contact-form-7 id="519" title="Контактна форма 1"]'); ?>
            </dic>
        </div>


        <div class="footer-box" id="contacts">
            <?php
            $loop = new WP_Query(array(
                'page_id' => 13,
            ));
            ?>
            <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                <h3>Контакти</h3>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>

    </div>
    <div class="copyr">
        <p>&copy; Copyright Decomama 2014 </p>
    </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
