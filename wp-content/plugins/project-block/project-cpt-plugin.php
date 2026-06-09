<?php
/**
 * Plugin Name: Project CPT Plugin
 */

if (!defined('ABSPATH')) exit;

require_once plugin_dir_path(__FILE__) . 'includes/cpt.php';
require_once plugin_dir_path(__FILE__) . 'includes/meta-fields.php';
require_once plugin_dir_path(__FILE__) . 'includes/graphql.php';

function register_project_block() {

    register_block_type(__DIR__);
}

add_action('init', 'register_project_block');