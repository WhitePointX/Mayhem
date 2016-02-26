<?php

function registriraj_menu() {
  register_nav_menu('header-menu', 'Header menu');
}
add_action( 'init', 'registriraj_menu' );

register_options_page('Global');


add_theme_support('post-thumbnails');
add_image_size('small-thumbnail',400,200,true);
add_image_size('post-featured',1000,400, array('left','top'));

function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>