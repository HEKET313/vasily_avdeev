<?php
/**
 * Template Name: Главная страница
 * Created by PhpStorm.
 * User: Nikita
 * Date: 01.11.2015
 * Time: 16:24
 */

get_header(); ?>

<?php include (TEMPLATEPATH . '/baner.php'); ?>
<script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/index/main.js"></script>
<div id="primary" class="content-area">
    <div id="content" class="site-content main">

        <?php if ( have_posts() ) : ?>

            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>

        <?php the_content();?>

    </div><!-- #content -->
</div><!-- #primary -->
<?php include (TEMPLATEPATH . '/index/modal_idea.php'); ?>
<?php include (TEMPLATEPATH . '/index/modal_callback.php'); ?>

<?php get_footer(); ?>
