<?php

/**
 * @package BayardoPlugin
 */
/*
Plugin Name: Bayardo Plugin
Plugin URI: http://bayardo.com
Description: This is my first attempt on writing a custom Plugin for this amazing tutorial series.
Version: 1.0.0
Author: Bayardo Lopez
Author URI: http://bayardolopez.com
License: GPLv2 or later
Text Domain: bayardo-plugin
*/

defined('ABSPATH') or die('No access');

class BayardoPlugin
{
    function __construct()
    {
        add_action('init', array($this, 'custom_post_type'));
    }
    function activate()
    {
        // generated a CPT
        $this->custom_post_type();
        // flush rewrite rules
        flush_rewrite_rules();
    }

    function deactivate()
    {
        // flush rewrite rules
    }

    function uninstall()
    {
        // delete CPT
        // delete all the plugin data from the DB
    }

    function custom_post_type() {
        register_post_type('book', ['public' => true, 'label' => 'Books']);
    }
}

if (class_exists('BayardoPlugin')) {
    $bayardoPlugin = new BayardoPlugin();
}

// activation
register_activation_hook(__FILE__, array($bayardoPlugin, 'activate'));

// deactivation
register_deactivation_hook(__FILE__, array($bayardoPlugin, 'deactivate'));

// uninstall