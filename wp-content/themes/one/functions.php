<?php
/**
 * Created by PhpStorm.
 * User: yearzero
 * Date: 9/18/2016
 * Time: 11:10 AM
 */

?>

<?php

function one_script_enqueue(){
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/one.css', array(), '1.0.0', 'all');
    wp_enqueue_script('customstyle', get_template_directory_uri().'/js/one.js', array(), '1.0.0', true);;
}
add_action('wp_enqueue_scripts', 'one_script_enqueue');

function one_theme_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation (Erez)');
    register_nav_menu('secondary', 'Footer Navigation (Erez)');

}
add_action('init', 'one_theme_setup');
?>
