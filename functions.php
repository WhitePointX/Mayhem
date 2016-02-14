<?php

function registriraj_menu() {
  register_nav_menu('header-menu', 'Header menu');
}
add_action( 'init', 'registriraj_menu' );

?>