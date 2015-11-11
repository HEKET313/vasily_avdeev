<head>
    <meta name="viewport" content="width=1024, user-scalable=0"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?>Тема 100</title>
    <link rel="stylesheet/less" type="text/css" href="<?=get_template_directory_uri(); ?>/css/loader.css">
    <link rel="stylesheet/less" type="text/css" href="<?=get_template_directory_uri(); ?>/css/style.less">
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/noty/jquery.noty.packaged.min.js"></script>
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/less.js" data-env="development"></script>
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/modal.js"></script>
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/main.js"></script>
    <script type="text/javascript">
        $.noConflict();
    </script>
    <?php wp_head(); ?>
</head>