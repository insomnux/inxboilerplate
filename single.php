<?php get_header(); ?>

<main id="primary" role="main">

<section>
<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
  ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php //thumbnail
        if ( has_post_thumbnail()) {?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail(); ?>
        </a>
      <?php
        } //if has_post_thumbnail ?>
        <h1><!-- post title -->
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        </h1>
        <?php
          the_content();
          the_tags( __( "Tags: ", "inxboilerplate" ), ', ', '<br>');
          the_category( __("Categories: ", "inxboilerplate" ), ', ', '<br>');
          comments_template();
        ?>
      </article>
      
  <?php
  } // while have_posts
} else { //if we don't have posts to display ?>
  <article>
    <h1><?php _e( "No posts yet.", "inxboilerplate" ); ?></h1>
  </article>
<?php
} //if have_posts
?>
</section>

</main>

<?php
get_sidebar();
get_footer();
