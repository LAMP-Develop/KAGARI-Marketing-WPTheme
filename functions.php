<?php
error_reporting(0);

require_once('lib/func/setting.php');
require_once('lib/func/add-func.php');

add_filter( 'wp_footer', function() {
  if ( is_page() || is_single() ) {
  ?>
  <script>
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    gtag('event', 'Submit', {
      'event_category' : 'Form',
      'event_label' : 'contact'
    });
  }, false );
  </script>
  <?php
  }
} );
