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
<head>
    <meta name="viewport" content="width=1024, user-scalable=0"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <script type="text/javascript">
        document.write('\x3Cscript src="' + (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//webfonts.creativecloud.com/abril-fatface:n4:all;source-sans-pro:n3:all.js" type="text/javascript">\x3C/script>');
    </script>
    <link rel="stylesheet/less" type="text/css" href="<?=get_template_directory_uri(); ?>/css/style.less">
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/less.js" data-env="development"></script>
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/modal.js"></script>
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_head(); ?>
</head>