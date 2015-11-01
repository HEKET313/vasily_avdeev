<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 25.10.2015
 * Time: 16:57
 */
function theme_setup() {
    add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'theme_setup' );