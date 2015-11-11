<?php
/**
 * Template Name: 500 ошибка
 * Created by PhpStorm.
 * User: Nikita
 * Date: 04.11.2015
 * Time: 14:42
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
    <?php include (TEMPLATEPATH . '/top_menu.php'); ?>

    <div id="primary" class="content-area">
        <div id="content" class="site-content error">
            <table>
                <tr>
                    <td>500 Ошибка</td>
                    <td></td>
                </tr>
                <tr>
                    <td><p>Что-то сломалось. Пока мы исправляем ошибку, вы можете выпить чашечку кофе :)</p></td>
                    <td></td>
                </tr>
            </table>
        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>