<?php
/*
Plugin Name:        Bladerunner
Plugin URI:         https://github.com/ekandreas/bladerunner
Description:        Blade template engine for WordPress
Version:            0.4.2
Author:             Andreas Ek
Author URI:         http://www.andreasek.se/

License:            MIT License
License URI:        http://opensource.org/licenses/MIT
*/

// Load Composer autoload if it exists.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

require_once __DIR__ . '/src/model.php';
require_once __DIR__ . '/src/controller.php';
require_once __DIR__ . '/src/blade.php';