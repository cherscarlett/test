<?php
   /*
   Plugin Name: Articles-usat-test
   Description: Code Test for USATSMG
   Version: 0.1
   Author: Cher Stewart
   Author URI: http://cherp.io
   License: MIT
   */



  add_action( 'wp_head', 'content_block_css' );
  add_filter( 'the_content', 'content_block_html' );

  function content_block_css() {
    echo '<link rel="stylesheet" href="' . plugin_dir_url( __FILE__ ) . 'assets/recent-post.css' . '" type="text/css" />';
  }

  function content_block_html( $content ) {
    $recent_post_id = wp_get_recent_posts( array( 'numberposts' => '1' ) )[0]['ID'];
    if( is_single() && ! empty( $GLOBALS['post'] ) && $recent_post_id != get_the_ID() ) {
      echo $content;
      require('content-block.php');
      return;
    }
    return $content;
  }

  function time_elapsed_string($datetime, $shorthand = false) {
    $now = new DateTime;
    $ago = new DateTime( $datetime );
    $diff = $now->diff( $ago );

    $diff->w = floor( $diff->d / 7 );
    $diff->d -= $diff->w * 7;

    if ( ! $shorthand ) {
      $string = array(
          'y' => 'year',
          'm' => 'month',
          'w' => 'week',
          'd' => 'day',
          'h' => 'hour',
          'i' => 'minute',
          's' => 'second',
      );
    } else {
      $string = array(
          'y' => 'y',
          'm' => 'm',
          'w' => 'w',
          'd' => 'd',
          'h' => 'h',
          'i' => 'm',
          's' => 's',
      );
    }

    foreach ( $string as $k => &$v ) {
      if ( $diff->$k ) {
        if  ( ($k == 'y' || $k == 'm' || $k == 'w' || $k == 'd') && $diff->$k > 0 ) {
          if ( ! $shorthand ) {
            return date( get_option('date_format'), strtotime($datetime) );
          }
          return date( 'n/j/o', strtotime($datetime) );
        }
        $v = $diff->$k . ' ' . $v . ( $diff->$k > 1 && !$shorthand ? 's' : '' );
      } else {
        unset( $string[$k] );
      }
    }

    $string = array_slice( $string, 0, 1 );

    return $string ? implode( ', ', $string ) . ' ago' : 'just now';
  }
