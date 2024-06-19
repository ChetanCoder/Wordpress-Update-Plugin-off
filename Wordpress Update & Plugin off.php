<?php
// 1.Wordpress 
// File:.wp-config.php
// Code:
define( 'WP_AUTO_UPDATE_CORE', false );

// 2.Plugin:
// File:.functions.php
// Code:
add_filter( 'auto_update_plugin', '__return_false' );


// 3.Themes:
// File:.functions.php
// Code:
add_filter( 'auto_update_theme', '__return_false' );
?>