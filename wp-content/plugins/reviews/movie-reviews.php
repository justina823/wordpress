<?php
/*
Plugin Name: Reviews
Description: Review post type with all the trimmings
Author: Justina Chan
Version: 1.0

*/

class My_Movie_Reviews {
  private static $instance;

  public static function getInstance() {
    if (self::$instance == NULL) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  private function __construct() {
    // implement hooks here
    add_action('init', array($this,'register_post_type'));
  }
  function register_post_type(){
    register_post_type('movie_review',array(
      'labels'=> array(
        'name' =>  ('Movie Reviews'),
        'singular_name' =>  ('Movie Review'),
      ),
      'description' =>  ('Highly opinionated movie review'),
      'supports' =>  array(
        'title','editor','excerpt','author','revisions','thumbnail','custom-fields',
      ),
      'public' => TRUE, 
      'menu_icon' => 'dashicons-format-video',
      'menu_position' => 1,

    ));
  }
  
  
}

My_Movie_Reviews::getInstance();
register_deactivation_hook(__FILE__,'flush_rewrite_rules' );
register_activation_hook(__FILE__,'My_Movie_Reviews::activate' );