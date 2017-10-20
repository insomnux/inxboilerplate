<?php
/* *
 * header.php (mandatory since v3.0.0)
 * <head> items and main navigation
 * @package inxboilerplate
 * */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="header">
  <?php
  the_custom_logo(); ?>
  <h1 class="brand-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
  <?php
  $description = get_bloginfo( 'description', 'display' );
  if ( $description || is_customize_preview() ) { ?>
    <h2 class="brand-tagline"><?php echo $description; ?></h2>
  <?php
  } ?>

  <nav id="main_nav" class="nav navbar">
  <?php
  wp_nav_menu( array(
    'theme_location'  => 'mainnav',
    'menu_id'         => 'header_navigation',
    'menu_class'      => 'nav-list',
  ) );
  ?>
  </nav><!-- ./#main_nav -->
</header><!-- #masthead -->
