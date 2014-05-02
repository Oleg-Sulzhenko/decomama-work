<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die('Please do not load this page directly. Thanks!');

if (post_password_required()) {
    ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
    <?php
    return;
}
?>

<!-- You can start editing here. -->

<?php if (have_comments()) : ?>
    <h6 class="title">comments</h6>
    <br/>
    <ul class="list-comments">
        <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?> 
        <!--  reference to function.php - tam template single comment entry-->
    </ul>

<?php else : // this is displayed if there are no comments so far  ?>

    <?php if (comments_open()) : ?>
        <!-- If comments are open, but there are no comments. -->

    <?php else : // comments are closed   ?>
        <!-- If comments are closed. -->
        <p class="nocomments">Comments are closed.</p>

    <?php endif; ?>
<?php endif; ?>


<?php if (comments_open()) : ?>
    <br/><br/>
    <section id="respond">

        <h6 class="title"><?php comment_form_title('leave a comment', 'leave a comment to %s'); ?></h6>

        <div class="cancel-comment-reply">
            <small><?php cancel_comment_reply_link(); ?></small>
        </div>

        <?php if (get_option('comment_registration') && !is_user_logged_in()) : ?>
            <p>You must be <a href="<?php echo wp_login_url(get_permalink()); ?>">logged in</a> to post a comment.</p>
        <?php else : ?>

            <form class="leave-a-comment" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

                <?php if (is_user_logged_in()) : ?>

                    <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

                <?php else : ?>

                    <p>
                        <input type="text" name="author" id="author" placeholder="NAME" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
                        <input type="email" name="email" id="email" placeholder="EMAIL" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
                    </p>
                    <br/><br/>
                <?php endif; ?>

                                          <!--<p id="allowed_tags"><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

                <p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4" placeholder="COMMENT""></textarea></p>

                <p>
                    <input name="submit" type="submit" id="submit" class="btn orange" tabindex="5" value="Post Comment" />
                    <?php comment_id_fields(); ?>
                </p>
                <?php do_action('comment_form', $post->ID); ?>

            </form>

        <?php endif; // If registration required and not logged in   ?>
    </section>

<?php endif; // if you delete this the sky will fall on your head   ?>
