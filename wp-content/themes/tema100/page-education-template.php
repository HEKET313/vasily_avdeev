<?php
/**
 * Template name: Страница обучения
 * Created by PhpStorm.
 * User: Nikita
 * Date: 04.11.2015
 * Time: 17:29
 */
get_header(); ?>

<?php include (TEMPLATEPATH . '/baner.php'); ?>
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/education/main.js"></script>
    <div id="primary" class="content-area">
        <div id="content" class="site-content education">


            <?php if ( have_posts() ) : ?>

                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            <?php the_content();?>

            <div class="posts">
                <?php $posts = get_posts([
                    'posts_per_page' => 0,
                    'category_name' => 'education'
                ]);
                foreach($posts as $post):
                    setup_postdata($post);?>
                    <table>
                        <tr>
                            <td></td>
                            <td>
                                <a href="<?=get_permalink($post->ID)?>"><?=$post->post_title?></a>
                                <span class="date"><?=$post->post_date?></span>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <?php if(has_post_thumbnail($post->ID)):?>
                                    <?=get_the_post_thumbnail($post->ID)?>
                                <?php endif; ?>
                                <?php the_excerpt(); ?>
                            </td>
                        </tr>
                    </table>
                <?php
                    wp_reset_postdata();
                    endforeach; ?>
            </div>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>
