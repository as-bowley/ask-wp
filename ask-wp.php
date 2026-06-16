<?php
/**
 * Plugin Name: AskWP
 * Description: Query your WordPress content in plain English.
 * Version: 0.1.0
 * Requires at least: 6.0
 * Requires PHP: 8.0
 * Author: Alex Bowley
 * License: GPL-2.0-or-later
 * Text Domain: askwp
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct file access
}

$autoload = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload)) {
	return;
}
require $autoload;

add_action('plugins_loaded', static function (): void {
	(new \AskWP\Plugin())->init();
});
