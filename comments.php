<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');
?>

<?php if ( have_comments() ) : ?>
<h3 id="comments_head"><?php comments_number(' No Comments', ' One Comment', ' % Comments' );?></h3>
<?php wp_list_comments(); ?>

<?php else : // this is displayed if there are no comments so far ?>

<?php endif; ?>
<?php if(comments_open()) : ?>

<?php comment_form(); ?>

<?php else : //if(comments_open()) ?>
<p>The comments are closed.</p>

<?php endif; //if(comments_open()) ?>
