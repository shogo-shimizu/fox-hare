<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <!-- home画面のヘッダー -->
    <header class="header row g-0 borderTopAnime">
        <div class="headerLeft col-md-6 g-0">
            <div class="title">
                <h1 class="display-4"><?php bloginfo('name'); ?></h1>
                <div class="headerLeftSubtitle">
                    <h4><?php bloginfo('description'); ?></h4>
                    <!-- <h2>おくりもの</h2> -->
                </div>
            </div>
        </div>
        <div class="headerRight col-md-6 borderLeftAnime">

        </div>
    </header>
    <!-- nabvar -->
    <div class="menu">
        <?php include(get_template_directory() . '/inc/navbar.php'); ?>
    </div>
    <!-- メインコンテンツ -->
    <main>
        <!-- 新着記事一覧 -->
        <div class="newContents">
            <h2>新着記事</h2>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('newContents_content'); ?>>
                        <?php the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <figure class="newThumbnail">
                                <?php if (has_post_thumbnail()) : ?>

                                    <?php the_post_thumbnail(); ?>

                                <?php else : ?>

                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/flower.jpg" alt="アイキャッチ">

                                <?php endif; ?>
                            </figure>
                        </a>
                        <div class="newContent">
                            <h2><a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (mb_strlen($post->post_title, 'UTF-8') > 30) {
                                        $title = mb_substr($post->post_title, 0, 30, 'UTF-8');
                                        echo $title . ' … ';
                                    } else {
                                        echo $post->post_title;
                                    }
                                    ?>
                                </a>
                            </h2>
                            <p><?php the_time(get_option('date_format')); ?></p>
                            <span class="categoryLinks">
                                <?php the_category('&nbsp'); ?>
                            </span>
                            <span class="tagLinks">
                                <?php the_tags('','',''); ?>
                            </span>
                            <p class="excerpt">
                                <?php the_excerpt(); ?>
                            </p>

                        </div>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- pagenation -->
        <?php the_posts_pagination(
            array(
                'prev_text' => '前ページへ',
                'next_text' => '次ページへ'
            )
            ); ?>
        <!-- end pagenation -->
    </main>

    <?php get_footer(); ?>

</body>

</html>