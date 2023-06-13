<?php get_header(); ?>
<h1>
  月別アーカイブ
</h1>
<ul>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <li>
    <a href="<?php the_permalink(); ?>">
      <time datetime="<?php the_time('Y-m-d'); ?>">
        <?php the_time('Y年m月d日'); ?>
      </time>
      <?php the_title(); ?>
    </a>
  </li>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</ul>
<?php
  the_posts_pagination( array( 
    'mid_size' => 1,
    'prev_text' => '', 
    'next_text' => '' 
  ) );
?>
<?php get_footer(); ?>