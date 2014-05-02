<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

// Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if ( post_password_required() ) { ?>
    <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
  <?php
    return;
  }
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
  <h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

  <nav>
    <div><?php previous_comments_link() ?></div>
    <div><?php next_comments_link() ?></div>
  </nav>
  
  <!-- !!! This part of code take mytheme_comment funtion template from function.php-->
  <ol class="commentlist">
    <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
  </ol>

  <nav>
    <div><?php previous_comments_link() ?></div>
    <div><?php next_comments_link() ?></div>
  </nav>
 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ( comments_open() ) : ?>
    <!-- If comments are open, but there are no comments. -->

   <?php else : // comments are closed ?>
    <!-- If comments are closed. -->
    <p class="nocomments">Comments are closed.</p>

  <?php endif; ?>
<?php endif; ?>