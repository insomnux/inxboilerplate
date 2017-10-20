<?php
/* *
 * footer.php (mandatory since v3.0.0)
 * closing tags and <footer> element
 * @package inxboilerplate
 * */

?>

<footer id="colophon">
  <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'inxboilerplate' ) ); ?>">
  <?php
    printf( esc_html__( 'Powered by %s', 'inxboilerplate' ), 'WordPress' );
  ?>
  </a>
</footer><!-- ./#colophon -->

<?php wp_footer(); ?>

</body>
</html>
