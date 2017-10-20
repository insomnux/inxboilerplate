<?php
/* *
 * sidebar with widgets
 * @package inxboilerplate
 * */

if ( ! is_active_sidebar( "r_sidebar" ) ) {
  return;
}
?>
<aside id="secondary" class="widget-area">
  <?php dynamic_sidebar( "r_sidebar" ); ?>
</aside><!-- ./#secondary -->
