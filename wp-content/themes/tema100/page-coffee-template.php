<?php
/**
 * Template Name: Страница кофе
 * Created by PhpStorm.
 * User: Nikita
 * Date: 01.11.2015
 * Time: 17:25
 */
get_header(); ?>

<?php include (TEMPLATEPATH . '/baner.php'); ?>
    <script type="text/javascript" src="<?=get_template_directory_uri(); ?>/js/coffee/main.js"></script>
    <div id="primary" class="content-area">
        <div id="content" class="site-content coffee">


            <?php if ( have_posts() ) : ?>

                <?php /* The loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

            <?php else : ?>
                <?php get_template_part( 'content', 'none' ); ?>
            <?php endif; ?>

            <?php the_content();?>

            <table>
                <tbody>
                    <tr>
                        <td></td>
                        <td>Продукция</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <?php $posts = get_posts([
                                'posts_per_page' => 0,
                                'category_name' => 'coffee'
                            ]);
                            foreach($posts as $post):?>
                            <div class="product">
                                <p><?=$post->post_title?></p>
                                <?=get_the_post_thumbnail($post->ID)?>
                                <a href="#" class="button small">Подробнее</a>
                            </div>
                            <?php endforeach; ?>
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php include (TEMPLATEPATH . '/coffee/modal_coffee.php'); ?>
<?php include (TEMPLATEPATH . '/coffee/modal_ganoderma.php'); ?>
<?php get_footer(); ?>