<?php
/*
Plugin Name: Frontpage Teleport
Plugin URI: https://github.com/ms-studio/frontpage-teleport
Description: Redirect the frontpage to some other URL.
Version: 1.0.0
Author: Manuel Schmalstieg
Author URI: https://github.com/ms-studio
*/


/* Redirection depuis la page d'accueil
*/

function frontpage_teleport() {

    if ( is_front_page() ) {

      ?><meta http-equiv="refresh" content="3;url=https://topic.to/nic/">
      <?php
    }
}
add_action( 'wp_head', 'frontpage_teleport' );