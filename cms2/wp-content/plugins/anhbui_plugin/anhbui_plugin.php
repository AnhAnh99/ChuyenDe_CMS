<?php
/*
Plugin Name: Anh nè plugin 2019
Description: Plugin lấy liên kết ngẫu nhiên các bài viết và hiển thị lên một bài viets cụ thể
Version: 1.0
Author: Anh nè
License: GPL
*/
function anhbui_rand_posts() {
    $args = array(
     'post_type' => 'post',
     'orderby' => 'rand',
     'posts_per_page' => 5,
     );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
      $string = '<ul>';
       while ( $the_query->have_posts() ) {
              $the_query->the_post();
              $string = '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
       }
       $string .= '</ul>';
       wp_reset_postdata();
    } else {
       $string = 'no posts found';
    }
       return $string;
    }
    add_shortcode('anhbui_rand_posts','anhbui_rand_posts');
?>