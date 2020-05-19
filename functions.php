<?php

  function medi_files(){
    wp_enqueue_script('b_jq', '//code.jquery.com/jquery-3.2.1.slim.min.js', NULL, "1.0", true);
    wp_enqueue_script('b_ajaz', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', NULL, "1.0", true);
    wp_enqueue_script('b_bmin', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', NULL, "1.0", true);
    wp_enqueue_style('medi_b_styles','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('medi_main_styles',get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts','medi_files');
 ?>
