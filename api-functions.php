<?php

function get_tag_data( $data ) {
    $args = array(
        'hide_empty' => false
    );

    $tags_array = get_tags($args);
   
    if ( empty( $tags_array ) ) {
        return null;
    }
   
    return $tags_array;
  }
