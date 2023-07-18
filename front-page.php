<?php get_header(); ?>

<main>
    <div class="main">
        <section class="main_name">
            <div class="main_sec">
                <h1 class="main_h1">RadicalPopGaming</h1>
                <h2 class="main_h2">
                    <div class="main_team">『熱く・楽しく・ゲームをプレイする』</div>
                    <div class="main_in1">地域やコミュニティへ貢献し、esports業界の発展に努めます。</div>
                    <div class="main_in2"> 趣味を生業に昇華させる市場づくりに努めます。</div>
                </h2>
            </div>
        </section>
    </div>

    <div class="slider">
        <div class="slider-inner">
            <!-- 記事のループ処理開始 -->
            <?php
              if( wp_is_mobile() ){
                $num = 3; //スマホの表示数(全件は-1)
              } else {
                $num = 3; //PCの表示数(全件は-1)
              }
              $args = [
                'post_type' => 'post', // 投稿タイプのスラッグ(通常投稿なので'post')
                'posts_per_page' => $num, // 表示件数
              ];
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <li class="article">
                <!-- 記事へのリンク -->
                <a href="<?php the_permalink(); ?>" class="">
                    <!-- アイキャッチ -->
                    <div class="article-img">
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
                    <h2 class="article-title">
                        <!-- タイトル -->
                        <?php the_title(); ?>
                    </h2>
                    <div class="" style="overflow-wrap: break-word;">
                        <!-- 本文の抜粋 -->
                        <?php the_excerpt(); ?>
                    </div>
                </a>
            </li>
            <?php endwhile; else: ?>
            <p>まだ記事がありません</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>