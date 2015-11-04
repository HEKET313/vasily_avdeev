<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 04.11.2015
 * Time: 21:40
 */
get_header(); ?>

    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/education/main.js"></script>
    <div id="primary" class="content-area">
        <div id="content" class="site-content education" role="main">

            <?php if ( have_posts() ) : ?>

                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>
                <table class="post">
                    <tr>
                        <td></td>
                        <td>
                            <h1><?=$post->post_title?></h1>
                            <span class="date"><?=$post->post_date?></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <?php the_content();?>
                        </td>
                    </tr>
                </table>
            </div>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>