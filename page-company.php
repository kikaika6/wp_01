<?php
/**
 * Template Name: 任意の名前を設定してください
 */
get_header(); ?>
<?php if (have_posts()):
              while (have_posts()) :
                 the_post();
                 the_content();
              endwhile;
           endif; ?>
<?php get_footer(); ?>