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

<div class="head">
    <?php include (TEMPLATEPATH . '/top_menu.php'); ?>
    <div class="head-content">
        <div class="caption">
            <h1>AVDEEV VASILIY</h1>
            <h2>100 x 100</h2>
        </div>
        <div class="badge">
            <p>Заработай на привычке миллионов</p>
        </div>
    </div>
</div>
<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <table>
            <tbody>
            <tr>
                <td></td>
                <td>Идея</td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td>Идея состоит в том, чтобы выйти на доход в 100 тыс. рублей в месяц</td>
                <td></td>
            </tr>
            <tr>
                <td><a href="#idea" data-action="show-modal">Смотреть</a></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <table>
            <tbody>
            <tr>
                <td></td>
                <td>Кофе</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Кофе с экстрактом рейши</td>
                <td rowspan="2"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="#coffee" data-action="show-modal">Смотреть</a></td>
            </tr>
            </tbody>
        </table>
        <table>
            <tbody>
            <tr>
                <td></td>
                <td>Регистрация</td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td>Начните зарабатывать деньги не сейчас, а ПРЯМО СЕЙЧАС!</td>
                <td></td>
            </tr>
            <tr>
                <td><a href="https://www.organogold.com/signup?personal_sponsor_distributor_id=10000011036&set_lang=ru&set_country=ru&only_distributor=true#step1_wrapper" target="_blank">Перейти</a></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <table>
            <tbody>
            <tr>
                <td></td>
                <td>Контакты</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Есть вопросы? Напишите мне!</td>
                <td rowspan="2"></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="#callback" data-action="show-modal">Написать</a></td>
            </tr>
            </tbody>
        </table>
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