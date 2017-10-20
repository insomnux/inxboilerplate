<?php
/* *
 * functions.php
 * @package inxboilerplate
 * */

if ( ! function_exists( "inxboilerplate_setup" ) ) {
  function inxboilerplate_setup() {
    /* Title tag cannot be added directly on header.php since v4.1
     * https://make.wordpress.org/themes/2015/08/25/title-tag-support-now-required/ */
    add_theme_support( 'title-tag' );
    /* Translation ready domain */
    load_theme_textdomain( 'inxboilerplate', get_template_directory() . '/languages' );
    /* Various required theme support stuff */
    add_theme_support( 'automatic-feed-links' ); //ThemeCheck REQUIRED
    add_theme_support( "post-thumbnails" ); //ThemeCheck RECOMMENDED

    /* Custom header, custom background - ThemeCheck RECOMMENDED */
    add_theme_support("custom-header", array(
      "default-image" => "",
      "flex-height" => true,
      "width" => "",
      "height" => "",
    ) );

    add_theme_support("custom-background", array(
      "default-color" => "fff",
    ) );
    /* Custom logo support (not required) */
    add_theme_support( 'custom-logo' );
  }
} // function_exists:inxboilerplate_setup
add_action( "after_setup_theme", "inxboilerplate_setup" );

if (!isset($content_width)) {
  $content_width = 900;
}

/* Register dynamic sidebar */
function inxboilerplate_widgets_init() {
  register_sidebar( array(
    "name" => __( "Sidebar", "inxboilerplate" ),
    "id"   => "r_sidebar",
    "before_widget" => '<section id="%1$s" class="widget %2$s">',
    "after_widget" => "</section>",
    "before_title" => '<h3 class="wigtitle">',
    "after_title" => "</h3>",
  ) );
}
add_action( "widgets_init", "inxboilerplate_widgets_init" );

/* Enqueue scripts and styles */
function inxboilerplate_scripts() {
  if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action ("wp_enqueue_scripts", "inxboilerplate_scripts" );
