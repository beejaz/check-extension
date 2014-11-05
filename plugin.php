<?php
/*
Plugin Name: Check Extension
Plugin URI: http://github.com/beejaz/check-extension
Description: Use filename as title for all URLs except known list of extensions and plain URLs
Version: 0.2
Author: beejaz
Author URI: http://imstuck.se/yourls/check-extension
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_filter( 'shunt_get_remote_title', 'beejaz_check_extension' );

function beejaz_check_extension( $false, $url ) {
  global $dont_ignore_title_for_extension;
  
  $ext = substr( strrchr( $url, '.' ), 1);

  $file = substr( strrchr( $url, '/' ), 1);

  if ( !in_array( $ext, $dont_ignore_title_for_extension ) ) {
    return $file;
  }

}
