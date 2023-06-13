<?php get_header(); ?>
<main class="main">
  <article class="">
    <ul class="">
      <!-- 記事のループ処理開始 -->
      <?php
        if( wp_is_mobile() ){
          $num = 3; // スマホの表示数(全件は-1)
        } else {
          $num = 5; // PCの表示数(全件は-1)
        }
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = [
          'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
          'paged' => $paged, // ページネーションがある場合に必要
          'posts_per_page' => $num, // 表示件数
        ];
        $wp_query = new WP_Query($args);
        if (have_posts()): while (have_posts()): the_post();
      ?>
      <li class="">
        <!-- 記事へのリンク -->
        <a href="<?php the_permalink(); ?>" class="">
          <!-- アイキャッチ -->
          <div class="">
            <?php the_post_thumbnail('post-thumbnail', array('alt' => the_title_attribute('echo=0'))); ?>
          </div>
          <p class="">
            <!-- 投稿日 -->
            <time datetime="<?php the_time('Y.n.j'); ?>">
              <?php the_time('Y.m.d'); ?>
            </time>
          </p>
          <div class="">
            <!-- カテゴリー1件表示(カテゴリー順の上にある方が表示される) -->
            <?php
              $category = get_the_category();
              echo '<span class="'.$category->slug.'">'.$category[0]->name.'</span>';
            ?>
          </div>
          <h2 class="">
            <!-- タイトル -->
            <?php the_title(); ?>
          </h2>
          <div class="">
            <!-- 本文の抜粋 -->
            <?php the_excerpt(); ?>
          </div>
        </a>
      </li>
      <?php endwhile; else: ?>
      <p>まだ記事がありません</p>
      <?php endif ?>
      <?php wp_reset_postdata(); ?>
      <!-- 記事のループ処理終了 -->
    </ul>
    <?php
  the_posts_pagination( array( 
    'mid_size' => 1,
    'prev_text' => '前へ', 
    'next_text' => '次へ' 
  ) );
?>
  </article>
</main>
<?php get_footer(); ?>