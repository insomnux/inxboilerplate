<?php
/* *
 * comments.php (mandatory since v3.0.0)
 * comments template
 * @package inxboilerplate
 * */
?>

<div id="comments" class="comments">

<?php
if (have_comments()) {
?>
  <h2><?php comments_number() ?></h2>
  <?php the_comments_navigation(); ?>
    <ul class="comments_list">
  <?php
    wp_list_comments( array() ); ?>
    </ul><!-- ./comments_list -->
<?php
} //if have_comments

comment_form();
?>

</div><!-- ./#comments -->
