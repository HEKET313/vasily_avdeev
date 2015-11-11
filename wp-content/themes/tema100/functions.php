<?php
/**
 * Created by PhpStorm.
 * User: Nikita
 * Date: 25.10.2015
 * Time: 16:57
 */
function theme_setup() {
    add_theme_support( 'post-thumbnails');
}
add_action( 'after_setup_theme', 'theme_setup' );

function royal_custom_error_pages() {

    // Get HTACCESS path & dynamic website url
    $htaccess_file = '.htaccess';
    $website_url = get_bloginfo('url').'/';

    // Check & prevent writing error pages more than once
    $check_file = file_get_contents($htaccess_file);
    $this_string = '# BEGIN WordPress Error Pages';

    if( strpos( $check_file, $this_string ) === false) {

        // Setup Error page locations dynamically
        $error_pages = PHP_EOL. PHP_EOL . '# BEGIN WordPress Error Pages'. PHP_EOL. PHP_EOL;
        $error_pages .= 'ErrorDocument 500 '.$website_url.'500'.PHP_EOL;
        $error_pages .= PHP_EOL. '# END WordPress Error Pages'. PHP_EOL;

        // Write the error page locations to HTACCESS
        $htaccess = fopen( $htaccess_file, 'a+');
        fwrite( $htaccess, $error_pages );
        fclose($htaccess);

    }
}
add_action('init','royal_custom_error_pages');

function new_excerpt_more( $more ) {
    return '... <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Читать далее >>', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );