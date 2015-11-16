<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 15.11.2015
 * Time: 14:43
 *
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
        <?php if(get_comments_number() != 0): ?>
            <h2 class="comments-title">
                <?php
                printf( _nx( 'Комментарии (%1$s)', 'Комментарии (%1$s)', get_comments_number(), 'comments title' ),
                    number_format_i18n( get_comments_number() ), get_the_title() );
                ?>
            </h2>

            <div class="comment-list">
                <?php
                wp_list_comments( array(
                    'style'       => 'div',
                    'walker'      => new CommentWalker(),
                    'short_ping'  => false,
                    'avatar_size' => 0,
                ) );
                ?>
            </div><!-- .comment-list -->

            <?php
            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
                ?>
                <p class="no-comments"><?php _e( 'Комментарии закрыты.' ); ?></p>
            <?php endif; ?>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php comment_form([
        'fields' => [
            'author' => '<input id="author" name="author" type="text" placeholder="Введите имя" value="'.esc_attr($commenter['comment_author']).'" size="=30"'.$aria_req.'/>',
            'email' => '<input id="email" name="email" type="email" placeholder="Введите Email (не публикуется)" value="'.esc_attr($commenter['comment_author_email']).'" size="30"'.$aria_req.'/>'],
        'comment_notes_before' => '',
        'comment_field' => '<textarea id="comment" name="comment" placeholder="Введите комментарий" aria-required="true"></textarea>',
        'class_submit' => 'button',
        'label_submit' => 'Отправить',
        'title_reply' => 'Оставить комментарий'
    ]); ?>

</div><!-- .comments-area -->
