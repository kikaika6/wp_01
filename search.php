<?php get_header(); ?>
<?php if (isset($_GET['s']) && empty($_GET['s'])) { ?>
<p>検索条件が入力されていません。</p>
<?php } else { ?>
<h1>
    <?php the_search_query(); ?>の検索結果 : <?php echo $wp_query->found_posts; ?>件
</h1>
<ul>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <li>
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
        <?php endwhile; ?>
        <?php else : ?>
        <p>検索条件に一致する記事がありませんでした。</p>
        <?php endif; ?>
    </li>
    <?php
    the_posts_pagination( array( 
      'mid_size' => 1,
      'prev_text' => '', 
      'next_text' => '' 
    ) );
  ?>
    <?php } ?>
</ul>
<?php get_footer(); ?>