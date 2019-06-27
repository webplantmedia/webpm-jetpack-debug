<?php
/*
Plugin Name: WebPM Jetpack Debug
Plugin URI: https://webplantmedia.com
Description: An easy to use plugin that puts Jetpack in Debug mode.
Author: Web Plant Media
Author URI: http://webplantmedia.com/
Version: 1.8
License: GPLv2 or later
*/
add_filter( 'jetpack_development_mode', '__return_true' );
