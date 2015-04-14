<?php

  $whitelist = array('127.0.0.1', "::1");
  if( in_array( $_SERVER['REMOTE_ADDR'], $whitelist ) ) {
    define( 'PROD_ENV', 'local' );
  }

  if ( 'local' != PROD_ENV ) {
    ?>
  <link rel="stylesheet" href="http://campfiresites.com/assets/dist/style.min.css">
  <?php } else { ?>
  <link rel="stylesheet" href="assets/dev/style.css">

<?php } ?>
