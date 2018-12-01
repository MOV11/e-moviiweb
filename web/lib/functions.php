<?php
/**
* Core Funtions
*
* @package Unifato
*/


// Loader --------------------------------------------------------------------
function locate_template($template_names, $load = false, $require_once = true ) {
  $located = '';
  foreach ( (array) $template_names as $template_name ) {
    if ( !$template_name )
    continue;

    if ( file_exists(ABSPATH . '/' . $template_name)) {
      $located = ABSPATH . '/' . $template_name;
      break;
    }
  }

  if ( $load && '' != $located ) {
    if ( $require_once ) {
      require_once( $located );
    } else {
      require( $located );
    }
  }

  return $located;
}

function get_template_part( $slug, $args = array() ) {
  $templates = array();
  $templates[] = "{$slug}.php";
  $located = locate_template($templates);

  if($located) {
    if ( $args && is_array( $args ) ) {
      extract( $args );
    }

    include $located;
  }
}

function get_uniqid( $prefix = '' ) {
  return uniqid( $prefix );
}
