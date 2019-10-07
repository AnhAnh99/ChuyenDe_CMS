<?php
function custom_theme_assets() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function remove_footer_admin () {

    echo 'Cảm ơn bạn đã xem bài viết';
    
    }
    
    add_filter('admin_footer_text', 'remove_footer_admin');

    