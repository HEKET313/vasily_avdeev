<?php
/**
 * Template Name: Страница о себе
 * Created by PhpStorm.
 * User: Nikita
 * Date: 16.11.2015
 * Time: 21:45
 */
get_header(); ?>

    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/about/main.js"></script>
    <div id="primary" class="content-area">
        <div id="content" class="site-content about">


            <?php if ( have_posts() ) : ?>

                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            <table>
                <tbody>
                    <tr>
                        <td></td>
                        <td>О себе</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <?php the_content();?>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div><!-- #content -->
    </div><!-- #primary -->
<?php get_footer(); ?>