<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 25.10.2015
 * Time: 12:58
 *
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Tema100
 * @since Tema100 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<?php include (TEMPLATEPATH . '/head.php'); ?>
<body>
    <?php include (TEMPLATEPATH . '/loader.php'); ?>
    <?php include (TEMPLATEPATH . '/baner.php'); ?>