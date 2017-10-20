<?php
/* *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inxboilerplate 
 * */

get_header(); ?>

<main id="primary" role="main">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    the_title( '<h1 class="post_title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h1>' );
    the_post();
    the_content();
    wp_link_pages( array(
      "before" => "<div>" . __( "Page: ", "inxboilerplate" ),
      "after"  => "</div>",
    ) );
  }
  the_posts_navigation();
} else {
  _e( "No posts found.", "inxboilerplate" );
} // have_posts
?>


</main><!-- ./#primary -->

<?php
get_sidebar();
get_footer();
