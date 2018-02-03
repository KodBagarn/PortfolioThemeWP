<?php
  function create_custommenus(){
    register_nav_menus(
      array(
        'header-nav' => __( 'Page Menu' ),
        'footer-nav' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'create_custommenus' );

?>
