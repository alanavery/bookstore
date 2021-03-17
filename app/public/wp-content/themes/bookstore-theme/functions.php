<?php 
function bookstore_files() {
  wp_enqueue_style('bookstore_main_styles')
}

add_action('wp_enqueue_scripts', 'bookstore_files');
?>