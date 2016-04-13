<?php

/**
 * @package Redirect After Comment To Custom Page
 */
/*
  Plugin Name: Redirect After Comment To Custom Page
  Plugin URI: http://clariontechnologies.co.in
  Description: Redirect After Comment To Custom Page
  Version: 1.0.0
  Author: Yogesh Pawar, Clarion Technologies
  Author URI: http://clariontechnologies.co.in
  License: GPLv2 or later
  Text Domain: Redirect After Comment To Custom Page
 */

//Plugin Constant
defined('ABSPATH') or die('Restricted direct access!');

if (!class_exists('WP_Comment_Redirect')) {
    require_once 'classes/class.comment.redirect.php';
}

//Initialising Class Plugin
new WP_Comment_Redirect();
?>