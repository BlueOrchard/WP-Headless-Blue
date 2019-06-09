<?php 

add_action( 'rest_api_init', function () {
    register_rest_route( 'custom/v1', '/get-tags', array(
      'methods' => 'GET',
      'callback' => 'get_tag_data',
    ) );
  } );