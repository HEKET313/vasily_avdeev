<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 25.10.2015
 * Time: 12:53
 *
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @package WordPress
 * @subpackage Tema100
 * @since Tema100 1.0
 */

get_header(); ?>

<script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/index/main.js"></script>
<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

        <?php if ( have_posts() ) : ?>
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

        <?php else : ?>
            <?php get_template_part( 'content', 'none' ); ?>
        <?php endif; ?>

    </div><!-- #content -->
    <?php include (TEMPLATEPATH . '/index/modal_idea.php'); ?>
    <?php include (TEMPLATEPATH . '/index/modal_coffee.php'); ?>
    <?php include (TEMPLATEPATH . '/index/modal_callback.php'); ?>
</div><!-- #primary -->

<?php get_footer(); ?>