<?php

  function contactFriendly() {
    $friendly = '<div>' . "\n";
    $friendly .= get_the_content();
    $friendly .= "</div>";
    echo $friendly;
  }

  function getForm() {
    do_shortcode( '[contact-form-7 id="54" title="Contact"]' );
  };

?>